<?php

namespace bayusa\Http\Controllers;

use Illuminate\Http\Request;

use bayusa\Http\Requests;
use bayusa\Http\Controllers\Controller;
use bayusa\Product;
use bayusa\Category;

class CartController extends Controller
{

	/**public function _construct(){
		if(!\Session::has('cart')) \Session::put('cart',array());
	}**/


    //Show cart
	public function show(){
		$cart = \Session::get('cart');
		$total = $this->total();
        return view('store.cart',compact('cart','total'));
	}
    
    //Add item

	public function add(Product $product){
		$cart = \Session::get('cart');
		$product->quantity = 25;
		$cart[$product->slug] = $product;
		\Session::put('cart',$cart);

		return redirect()->route('cart-show');
	} 

    //Delete item

    public function delete(Product $product){
    	$cart = \Session::get('cart');
    	unset($cart[$product->slug]);
    	\Session::put('cart',$cart);

    	return redirect()->route('cart-show');
    }

    //Update item

    public function update(Product $product, $quantity){
    	//$product = Product::where('slug',$slug)->first();
    	$cart = \Session::get('cart');
    	$cart[$product->slug]->quantity = $quantity;
    	\Session::put('cart',$cart);

    	return redirect()->route('cart-show');
    }

    //trash cart

    public function trash(){
    	\Session::forget('cart');
    	return redirect()->route('cart-show');	
    }

    //Total

    private function total(){
    	$cart = \Session::get('cart');
    	$total = 0;
    	if (count($cart)) {
	    		foreach ($cart as $item) {
	    		$total += $item->price * $item->quantity;
    		}
    	}

    	return $total;
    }

    //Order Detail

    public function orderDetail(){
    	if(count(\Session::get('cart'))<=0) return redirect()->route('welcome');
    	$cart = \Session::get('cart');
    	$total = $this->total();
    	return view('store.order-detail',compact('cart','total'));
    }
}
