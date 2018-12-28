<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class deskripsi_item extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\pelelangan::all();
        return view('describeItemShow',compact('data'));

        $name = \App\users::all();
        return view('describeItemShow',compact('name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('describeItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = new \App\pelelangan();
        $datas->id_item = $request->input('idItem');
        $datas->id_user = $request->input('idUser');
         $datas->nominal_bid = $request->input('nilaiBid');
        $datas->file = $newName;
        $datas->save();
        return redirect()->route('deskripsi.describeItem')->with('alert-success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = \App\pelelangan::all();
        return view('describeItemShow',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = \App\Item::findOrFail($id);
        return view('describeItem',compact('data'));
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
         $datas = new \App\pelelangan();
        $datas->id_item = $request->input('id_item');
        $datas->id_user = $request->input('id_user');
         $datas->nominal_bid = $request->input('nilaiBid');
        $datas->save();
        return redirect()->route('deskripsi.index')->with('alert-success','Data berhasil ditambahkan!');
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
