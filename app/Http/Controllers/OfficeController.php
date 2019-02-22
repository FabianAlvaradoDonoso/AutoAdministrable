<?php

namespace App\Http\Controllers;

use App\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = Office::all();
        return view('system.onepage.index', compact('offices'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('office.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/vetportugal/images/', $name);
        }
        $office = new Office();
        $office->logo =$name;
        $office->phone =$request->input('phone');
        $office->cellphone =$request->input('cellphone');
        $office->adress =$request->input('adress');
        $office->contactmail =$request->input('contactmail');
        $office->fblink =$request->input('fblink');
        $office->instalink =$request->input('fblink');
        $office->twitterlink =$request->input('fblink');
        $office->youtubevideo =$request->input('fblink');
        $office->maplink =$request->input('fblink');
        $office->save();

        return 'creado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
