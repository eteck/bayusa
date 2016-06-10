<?php

namespace bayusa\Http\Controllers\Admin;

use Illuminate\Http\Request;

use bayusa\Http\Requests;
use bayusa\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }

    public function catalogo(){
    	return view('admin.catalogo');
    }
}
