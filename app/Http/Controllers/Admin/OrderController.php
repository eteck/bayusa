<?php

namespace bayusa\Http\Controllers\Admin;

use Illuminate\Http\Request;

use bayusa\Http\Requests;
use bayusa\Http\Controllers\Controller;
use bayusa\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::orderBy('id','desc')->get();

        return view('admin.order.index',compact('orders'));
    }

    public function orderDetail(Order $order){
        return view('admin.order.detail',compact('order'));
    }

    
}
