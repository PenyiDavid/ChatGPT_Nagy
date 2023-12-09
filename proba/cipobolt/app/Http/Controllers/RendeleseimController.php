<?php

namespace App\Http\Controllers;

use App\Models\Rendeles;
use App\Models\User;
use Illuminate\Http\Request;

class RendeleseimController extends Controller
{
    public function index(){
        $user = auth()->user();
        $rendeleseim = $user->rendelesek;
        return view("rendeleseim", ['rendeleseim' => $rendeleseim]);
    }
}
