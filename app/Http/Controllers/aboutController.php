<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about()
    {
        //menampilkan halaman view di lokasi resources/views/test.blade.php
        return view('about');
    }

    public function home()
    {//menampilkan halaman view di lokasi resources/views/test.blade.php
       $data = \App\Item::all();
        return view('index',compact('data'));
    }
}
