<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles('admin');   //Limita la entrada a lugares dependiendo el tipo de usuario .. No funciona Error 401

        $categories = Category::all();
        return view('Category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre'   =>'required',
            'descripcion'   =>'required',
        ]);
        $category = new Category;
        $category->name = $request->nombre;
        $category->description = $request->descripcion;
        $category->save();

        return redirect()->route('category.index')->with('success','Categoría creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nombre'   =>'required',
            'descripcion'   =>'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->nombre;
        $category->description = $request->descripcion;
        $category->save();

        return redirect()->route('category.index')->with('success','Actualización exitosa.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if($category = Category::find($id)->delete()){
            return back()->with('success', 'Categoría eliminada con éxito');
        }else{
            return back()->with('success', 'Error al borrar');
        }
    }
}
