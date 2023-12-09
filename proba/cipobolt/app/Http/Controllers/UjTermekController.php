<?php

namespace App\Http\Controllers;

use App\Models\Termek;
use Illuminate\Http\Request;

class UjTermekController extends Controller
{
    public function index()
    {
        return view('ujtermek');
    }

    public function store(Request $request)
    {
        $request->validate([
            'termek_neve' => 'required|string|max:255',
            'ar' => 'required|integer',
            'meret' => 'required|integer',
            'darabszam' => 'required|integer',
            'eleresi_ut' => 'required|string|required|max:255'
        ]);
        $ujTermek = new Termek();
        $ujTermek->termek_neve = $request->input('termek_neve');
        $ujTermek->ar = $request->input('ar');
        $ujTermek->meret = $request->input('meret');
        
        $ujTermek->darabszam = $request->input('darabszam');
        
        $ujTermek->eleresi_ut = $request->input('eleresi_ut');
        $ujTermek->save();
        
        // Additional logic or redirection after successful data storage

        return redirect()->back()->with('success', 'Product stored successfully!');
    }
}
