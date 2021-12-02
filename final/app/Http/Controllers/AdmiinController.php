<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmiinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store3(Request $request)
    {
        $admiin = new Admiin();
        $admiin->name = $request->input('name');
        $admiin->idd = $request->input('idd');
        $admiin->email = $request->input('email');
        $admiin->password = $request->input('password');
        $admiin->phone = $request->input('phone');
    
        $admiin->save();
        return redirect ('/');
    }
    public function logs2(Request $request)
    {
        $admiin = new Admiin();
        $admiin->name = $request->input('name');
        $admiin->password = $request->input('password');
        $data = DB::select('select id from admiin where name=? and password=?' ,[$uzer->name, $uzer->password]);
        if(count($data)){
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
