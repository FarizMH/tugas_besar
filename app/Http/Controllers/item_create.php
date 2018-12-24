<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class item_create extends Controller
{
    public function item_create()
    {
        //menampilkan halaman view di lokasi resources/views/test.blade.php
        return view('item-create');
    }
    
}
