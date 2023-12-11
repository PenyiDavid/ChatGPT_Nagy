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
        $min_ar = $request->input('min_ar');
        $max_ar = $request->input('max_ar');

        $query = Termek::query();

        if ($meret) {
            $query->where('meret', $meret);
        }

        if ($min_ar) {
            $query->where('ar', '>=', $min_ar);
        }

        if ($max_ar) {
            $query->where('ar', '<=', $max_ar);
        }

        $termekek = $query->get();

        return view('termekek', ['termekek' => $termekek]);
    }
    public function clearFilters()
    {
        // Töröld az összes szűrőt, például szétszedve az URL paramétereit
        return redirect()->route('termekek.index'); // Vagy ahova vissza akarod irányítani
    }
}
