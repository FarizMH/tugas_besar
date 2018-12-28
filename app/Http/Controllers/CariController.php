<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class CariController extends Controller
{
   public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = Item::where('name', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('result', compact('hasil', 'query'));
    }
}
