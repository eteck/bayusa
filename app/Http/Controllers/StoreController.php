<?php

namespace bayusa\Http\Controllers;

use Illuminate\Http\Request;

use bayusa\Http\Requests;
use bayusa\Http\Controllers\Controller;
use bayusa\Product;
use \Session;

class StoreController extends Controller
{

    public function index(){
      
      try{
        //$products = Product::paginate(20);
        $products = Product::all();
      }catch(\Exception $e){
        //dd($e);
        $products = array();
      }

      //dd($products);
      return view('store.index',compact('products'));
    }

    public function show($slug){
      try{
        $product = Product::where('slug', $slug)->first();
        return view('store.product_detail',compact('product'));
      }catch(\Exception $e){
        $product = array();
        return view('store.product_detail',compact('product'));
      }
      
    }

    public function contacto(){
      return view('store.contacto');
    }

    public function conocenos(){
      return view('store.conocenos');
    }

    public function politicas(){
      return view('store.politicas');
    }

    public function promociones(){
      return view('store.promociones');
    }
}
