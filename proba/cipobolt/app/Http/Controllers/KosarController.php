<?php

namespace App\Http\Controllers;
use App\Models\Termek;

use Illuminate\Http\Request;

class KosarController extends Controller
{
    public function index(){
        $termekek = Termek::all();

        return view("termek kosarba", ['termekek' => $termekek]);
    }
}
