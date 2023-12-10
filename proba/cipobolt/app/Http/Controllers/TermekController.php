<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Termek;

class TermekController extends Controller
{
    public function index(){
        $termekek = Termek::all();

        return view("termekek", ['termekek' => $termekek]);
    }

    public function filterProducts(Request $request)
    {
        $meret = $request->input('meret');
    
        // Eloquent query a szűréshez
        $termekek = Termek::where('meret', $meret)->get();
    
        return view('termekek', ['termekek' => $termekek]);
    }
}
