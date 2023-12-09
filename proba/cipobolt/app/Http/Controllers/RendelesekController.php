<?php

namespace App\Http\Controllers;

use App\Models\Rendeles;
use Illuminate\Http\Request;

class RendelesekController extends Controller
{
    public function index(){
    $rendelesek = Rendeles::all();

    return view("rendelesek", ['rendelesek' => $rendelesek]);
    }
}
