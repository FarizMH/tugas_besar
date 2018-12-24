<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexUser extends Controller
{
     public function home()
    {
    	$data = \App\Item::all();
        return view('item',compact('data'));
        //menampilkan halaman view di lokasi resources/views/test.blade.php
       
    }
}
