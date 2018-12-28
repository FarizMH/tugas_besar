<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\editProfil;
class profilEdit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = editProfil::all();
        return view('profil_user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('edit_profil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new \App\editProfil();
        $data->fullname = $request->input('name');
        $data->fullname = $request->input('email');
        $data->fullname = $request->input('fullname');
        $file = $request->file('file');
        $data->fullname = $request->input('password');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->alamat = $request->input('bidAdress');
        $data->save();
        return redirect()->route('edit-profil.index')->with('alert-success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = editProfil::where('id',$id)->get();

        return view('profilku',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = \App\editProfil::findOrFail($id);
        return view('edit_profil',compact('data'));
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
        $data = \App\editProfil::findOrFail($id);
        $data->fullname = $request->input('fullname');
        
        $data->alamat_bidder = $request->input('bidAdress');
        $file = $request->file('file');
       
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/profil',$newName);
        $data->file = $newName;

        
       
        $data->save();
        return redirect()->route('edit_profil.index')->with('alert-success','Data berhasil diubah!');
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
