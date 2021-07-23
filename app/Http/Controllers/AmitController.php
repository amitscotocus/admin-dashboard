<?php

namespace App\Http\Controllers;

use App\amit;
use Illuminate\Http\Request;



class AmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('model');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function thanks()
    {
        return view('thanks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'phone'=> 'required'
        ]);

        $ami = new Amit;

        $ami->name = $request->input('name');
        $ami->email = $request->input('email');
        $ami->address = $request->input('address');
        $ami->phone = $request->input('phone');

        $ami->save();
        return redirect('thanks')->with('success', 'Data saved');
        // return redirect('/model')->with('success', 'Data added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\amit  $amit
     * @return \Illuminate\Http\Response
     */
    public function show(amit $amit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\amit  $amit
     * @return \Illuminate\Http\Response
     */
    public function edit(amit $amit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\amit  $amit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, amit $amit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\amit  $amit
     * @return \Illuminate\Http\Response
     */
    public function destroy(amit $amit)
    {
        //
    }
}
