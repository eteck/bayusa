<?php

namespace bayusa\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Request;
 
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
 
use bayusa\Order;
use bayusa\OrderItem;


class PaypalController extends BaseController
{


    private $_api_context;

    public function __construct(){


    	//Setup PayPal api context
    	$paypal_conf = \Config::get('paypal');
		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function postPayment(){
    	$payer = new Payer();
    	$payer->setPaymentMethod('paypal');

    	$items = array();
    	$subtotal = 0;
    	$cart = \Session::get('cart');
    	$currency = 'MXN';

    	//Se asignan los items al objeto Item de PayPal
    	foreach ($cart as $producto) {
			$item = new Item();
			$item->setName($producto->name)
				 ->setCurrency($currency)
				 ->setDescription($producto->extract)
				 ->setQuantity($producto->quantity)
				 ->setPrice($producto->price);

			$items[] = $item;
			$subtotal += $producto->quantity * $producto->price;
    	}

    	$item_list = new ItemList();
    	$item_list->setItems($items);

    	$details = new Details();
    	$details->setSubtotal($subtotal)
    			->setShipping(0); //costo de envio

    	$total = $subtotal + 0;

    	$amount = new Amount();
    	$amount->setCurrency($currency)
    		   ->setTotal($total)
    		   ->setDetails($details);

    	$transaction = new Transaction();
    	$transaction->setAmount($amount)
    				->setItemList($item_list)
    				->setDescription('Pedido de Bayusa de México');

    	$redirect_urls = new RedirectUrls();
    	$redirect_urls->setReturnUrl(\URL::route('payment.status'))
    				  ->setCancelUrl(\Url::route('payment.status'));

    	$payment = new Payment();
    	$payment->setIntent('Sale')
    			->setPayer($payer)
    			->setRedirectUrls($redirect_urls)
    			->setTransactions(array($transaction));

    	try{
    		$payment->create($this->_api_context);
    	} catch(PPConnectionException $ex){
    		if(\Config::get('app.debug')){
    			echo "Exception: ". $ex->getMessage().PHP_EOL;
    			$err_data = json_decode($ex->getData(),true);
    			exit;
    		}else{
    			die('Ups! Algo salio mal');
    		}
    	}

    	foreach ($payment->getLinks() as $link) {
    		if($link->getRel() == 'approval_url'){
    			$redirect_url = $link->getHref();
    			break;
    		}
    	}

    	//Se agrega el id de la compra a la Session
    	\Session::put('paypal_payment_id',$payment->getId());

    	if(isset($redirect_url)){
    		//Se redirecciona a paypal
    		return \Redirect::away($redirect_url);
    	}

    	return \Redirect::route('cart-show')->with('error','Ups! error desconocido, intente de nuevo.');
    }

    public function getPaymentStatus(){
    	//se obntiene el payment id de la Sesion antes de eliminarlo
    	$payment_id = \Session::get('paypal_payment_id');

    	//Limpiamos el id de la sesion 
    	\Session::forget('paypal_payment_id');	
 
		$payerId = Request::get('PayerID');
		$token = Request::get('token');

    	if(empty($payerId) || empty($token)){
    		return \Redirect::route('cart-show')->with('message','Hubo un problema al intentar pagar con paypal');
    	}

    	$payment = Payment::get($payment_id, $this->_api_context);

    	$execution = new PaymentExecution();
    	$execution->setPayerId(Request::get('PayerID'));

    	$result = $payment->execute($execution, $this->_api_context);

    	if($result->getState() == 'approved'){
    		
    		$this->saveOrder();
    		
    		\Session::forget('cart');

    		return \Redirect::route('welcome')->with('message','Compra realizada exitosamente!!');
    	}

    	//Si la compra no se culmino se redirecciona con mensaje de error
    	return \Redirect::route('cart-show')->with('message','La compra fue cancelada, PayPal no confirmo su compra');
    }

    protected function saveOrder(){
		$subtotal = 0;
		$cart = \Session::get('cart');
		$shipping = 0;
 
		foreach($cart as $producto){
			$subtotal += $producto->quantity * $producto->price;
		}
 
		$order = Order::create([
			'subtotal' => $subtotal,
			'shipping' => $shipping,
            'type_order' => 'paypal',
			'user_id' => \Auth::user()->id
		]);
 
		foreach($cart as $producto){
			$this->saveOrderItem($producto, $order->id);
		}
	}
 
	protected function saveOrderItem($producto, $order_id){
		OrderItem::create([
			'price' => $producto->price,
			'quantity' => $producto->quantity,
			'product_id' => $producto->id,
			'order_id' => $order_id
		]);
	}
}
