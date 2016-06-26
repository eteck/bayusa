<?php

namespace bayusa\Http\Controllers;

use Illuminate\Http\Request;
use bayusa\Http\Requests;

use bayusa\Order;
use bayusa\OrderItem;

class OrderController extends Controller
{

	public function orderRequest(){
		$this->saveOrder();
		\Session::forget('cart');
		return \Redirect::route('welcome')->with('message','¡Compra realizada exitosamente!');
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
			'type_order' => 'pedido',
			'custom_label' => '20 productos personalizados',
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
