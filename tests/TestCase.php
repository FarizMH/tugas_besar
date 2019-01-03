<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function index()
    {
       $data = \App\Item::all();
        return view('item',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new \App\Item();
        $data->name = $request->input('name');
        $data->open_bid = $request->input('openBid');
        $data->deskripsi = $request->input('deskripsi');
        $data->id_user = $request->input('id_user');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->save();
        return redirect()->route('file.index')->with('alert-success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Item::where('id',$id)->get();

        return view('lelangku',compact('data'));
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
        return view('edit_lelang',compact('data'));
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
       $data = \App\Item::findOrFail($id);
        $data->name = $request->input('name');
        
        $data->open_bid = $request->input('openBid');
        $data->deskripsi = $request->input('deskripsi');
        $data->id_user = $request->input('idUser');
        if (empty($request->file('file'))){
            $data->file = $data->file;
        }
        else{
            unlink('uploads/file/'.$data->file); //menghapus file lama
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $data->file = $newName;
        }
       
        $data->save();
        return redirect()->route('file.index')->with('alert-success','Data berhasil diubah!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Item::findOrFail($id);
        $data->delete();
        return redirect()->route('file.index')->with('alert-success','Data berhasil dihapus!');
    }
}
