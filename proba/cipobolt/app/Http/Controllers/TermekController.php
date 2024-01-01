<?php

namespace App\Http\Controllers;

use App\Models\Termek;
use App\Models\Rendeles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TermekController extends Controller
{
    public function index(){
        $termekek = Termek::where('darabszam', '>', 0)->get();

        return view("termekek", ['termekek' => $termekek]);
    }
    
    public function torles($termekId)
    {
    Termek::find($termekId)->delete();

    return redirect()->back()->with('success', 'A termék törölve!');
    }

    public function kosar($termekId)
    {
        $termek = Termek::find($termekId);
        $termek->update(['darabszam' => $termek->darabszam - 1]);
        
        if (!$termek) {
            return response()->json(['error' => 'A termék nem található'], 404);
        }

        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'A felhasználó nincs bejelentkezve'], 401);
        }

        $ujRendeles = new Rendeles([
            'user_id' => $user->id,
            'termek_id'=> $termek,
        ]);

        $termek->Rendeles()->save($ujRendeles);

    return redirect()->back()->with('success', 'A termék törölve!');
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
