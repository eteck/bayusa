<?php

namespace bayusa\Http\Controllers;

use bayusa\Http\Requests;
use Illuminate\Http\Request;
use bayusa\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all();
        $products = Product::paginate(20);
        return view('/home',compact('products'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        $products = Product::all();
        return view('products',compact('products'));
    }
}
