<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        // dd($products);
        return view('product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
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
            'precio'   =>'required|integer',
            'descripcion'   =>'required',
            'categoria'   =>'required',
            'imagen'   =>'required|image',
        ]);

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/products/', $name);
        }
        if($request->destacado == 'on'){$request->destacado = 1;}else{$request->destacado = 0;}
        // dd($request->destacado);
        $product = new Product();
        $product->name = $request->nombre;
        $product->price = $request->precio;
        $product->description = $request->descripcion;
        $product->category_id = $request->categoria;
        $product->image = $name;
        $product->outstanding = $request->destacado;
        $product->save();

        return redirect()->route('product.index')->with('success','Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        echo "hola";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $this->validate($request,[
        //     'nombre'        => 'required',
        //     'precio'        => 'required|integer',
        //     'descripcion'   => 'required',
        //     'categoria'     => 'required',
        // ]);

        if($request->destacado == 'on'){$request->destacado = 1;}else{$request->destacado = 0;}
        $product = Product::find($id);
        // dd($product);
        if($request->hasFile('imagen')){
            $file_path = public_path() . '/images/products/' . $request->imagen;
            \File::delete($file_path);
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/products/', $name);
            $product->image = $name;
        }
        $product->name = $request->nombre;
        $product->price = $request->precio;
        $product->description = $request->descripcion;
        $product->category_id = $request->categoria;
        $product->outstanding = $request->destacado;
        $product->save();


        // return "Se actualizo correctamente";
        return redirect()->route('product.index')->with('success', 'Producto Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return back()->with('success', 'Producto eliminado con éxito');
    }
}
