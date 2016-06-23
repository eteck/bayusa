<?php

namespace bayusa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use bayusa\Http\Requests;
use bayusa\Category;
use bayusa\Product;

class MenuController extends Controller
{
    //Menú principal
    public function menu(){
    	try{
    		$msg = "Succes";
    		//$menu = Category::where('parent_id','=',null)->take(10)->get();
            $menu = Category::where('parent_id','=',null)->orderBy('name','asc')->get();
            return Response::json(["msg"=>$msg,"menu"=>$menu->toArray()],200);
            //return view('store.categories_products');
    	}catch(\Exception $e){
    		$msg = "Error";
        	$menu = array();
            return Response::json(["msg"=>$msg,"menu"=>""],200);
      	}
    }

    public function subMenu(Category $category){
    	
    	try{
    		$msg = "Succes";
            //dd($category->id);
            $id = $category->id;
    		$categories = Category::where('parent_id','=',$id)->orderBy('name','asc')->get();
            $products = Product::where('category_id','=',$id)->get();
            return view('store.categories_products',compact('categories','products','category'));
    	}catch(\ModelNotFoundException $m){
    		$submenu = [];
    	}catch(\Exception $e){
    		$msg = "Error";
            return Response::json(["msg"=>$msg,"menu"=>""],200);
    	}
    }

    
}
