<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Uzer;
class UzerController extends Controller
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
    public function store2(Request $request)
    {
        $uzer = new Uzer();
        $uzer->name = $request->input('name');
        $uzer->email = $request->input('email');
        $uzer->password = $request->input('password');
        $uzer->phone = $request->input('phone');
    
        $uzer->save();
        return redirect ('/');
    }
    public function logs(Request $request)
    {
        $uzer = new Uzer();
        $uzer->name = $request->input('name');
        $uzer->password = $request->input('password');
        $data = DB::select('select id from uzers where name=? and password=?' ,[$uzer->name, $uzer->password]);
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
