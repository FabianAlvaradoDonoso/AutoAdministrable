<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Carousels = Carousel::all();
        return view('Carousel.index', compact('Carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Carousel.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/vetportugal/images/', $name);
        }
        $Carousel = new Carousel();
        $Carousel->imagen =$name;
        $Carousel->title = $request->input('name');
        $Carousel->subtitle = $request->input('subtitle');
        $Carousel->btntitle = $request->input('btntitle');
        $Carousel->linktitle = $request->input('linkbtn');
        $Carousel->slug = $request->input('name');

        $Carousel->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $Carousel)
    {
        return view('Carousel.show', compact('Carousel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $Carousel)
    {
        return view('Carousel.edit', compact('Carousel'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $Carousel)
    {
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/vetportugal/images/', $name);
        }
        
        $Carousel->fill($request->except('imagen'));
        $Carousel->save();
        return redirect()->route('Carousel.index')->with('success','Actualización exitosa.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
