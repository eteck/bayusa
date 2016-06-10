<?php

namespace bayusa\Http\Controllers\Admin;

use Illuminate\Http\Request;

use bayusa\Http\Requests;
use bayusa\Http\Controllers\Controller;
use bayusa\Product;
use bayusa\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Category::orderBy('name','asc')->lists('name','id');
        return view('admin.product.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
          'name' => 'required|unique:categories|max:255',
          'description' => 'required',
        ]);

        
        $producto = Product::create([
            'name'=>$request['name'],
            'category_id'=>$request['category_id'],
            'slug'=>str_slug($request['name']),
            'description'=>$request['description'],
            'stract'=>$request['stract'],
            'image'=>$request['image'],
            'quantity'=>$request['quantity'],
            'price'=>$request['price'],
            'visible'=>$request->has('visible') ? 1: 0
            ]);

        $message = $producto ? 'Producto agregado correctamente!' : 'El Producto no pudo agregarse!';
        
        return redirect()->route('admin.product.index')->with('message', $message);
        
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categorias = Category::orderBy('name','asc')->lists('name','id');
        return view('admin.product.edit',compact('product','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $product->fill($request->all());
        $product->slug = str_slug($request['name']);
        $product->visible = $request->has('visible') ? 1: 0;

        $updated = $product->save();

        $message = $updated ? '¡Categoria actualizada correctamente!':'¡La categoria no fue actualizada!';

        return redirect()->route('admin.product.index')->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $deleted = $product->delete();

        $message = $deleted ? 'Producto eliminado exitosamente!':'¡Error al eliminar el producto!';

        return redirect()->route('admin.product.index')->with('message',$message);
    }
}
