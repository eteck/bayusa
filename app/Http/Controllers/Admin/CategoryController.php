<?php

namespace bayusa\Http\Controllers\Admin;

use Illuminate\Http\Request;

use bayusa\Http\Requests;
use bayusa\Http\Controllers\Controller;
use bayusa\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categorias = Category::orderBy('name', 'asc')->get();
        return view('admin.category.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
        $categorias_padre = Category::orderBy('name', 'asc')->lists('name','id');
        return view('admin.category.create',compact('categorias_padre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Se almacenan las categorias
        
        $this->validate($request, [
          'name' => 'required|unique:categories|max:255',
          'description' => 'required',
        ]);

        $category = Category::create([
            'name'=>$request['name'],
            'parent_id'=>$request['parent_id'],
            'slug'=>str_slug($request['name']),
            'description'=>$request['description'],
            ]);

        $message = $category ? 'Categoría agregada correctamente!' : 'La Categoría NO pudo agregarse!';
        
        return redirect()->route('admin.category.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
         //$categorias_padre = Category::where('parent_id',0)->orderBy('name', 'desc')->lists('name','id');
        $categorias_padre = Category::orderBy('name', 'desc')->lists('name','id');
        return view('admin.category.edit',compact('category','categorias_padre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $category->fill($request->all());
        $category->slug = str_slug($request['name']);

        $updated = $category->save();

        $message = $updated ? '¡Categoria actualizada correctamente!':'¡La categoria no fue actualizada!';

        return redirect()->route('admin.category.index')->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $deleted = $category->delete();

        $message = $deleted ? '¡Categoria eliminada exitosamente!':'¡Error al eliminar la categoria!';

        return redirect()->route('admin.category.index')->with('message',$message);
    }
}
