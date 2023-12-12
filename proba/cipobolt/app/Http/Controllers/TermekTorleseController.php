<?php

namespace App\Http\Controllers;
use App\Models\Termek;

use Illuminate\Http\Request;

class TermekTorleseController extends Controller
{
    public function index(){
        $termekek = Termek::all();

        return view("termek törlése", ['termekek' => $termekek]);
    }
}
