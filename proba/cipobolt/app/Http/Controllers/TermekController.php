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
}
