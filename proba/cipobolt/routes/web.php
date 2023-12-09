<?php

use App\Models\Rendeles;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermekController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UjTermekController;
use App\Http\Controllers\RendelesekController;
use App\Http\Controllers\RendeleseimController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kosar', function () {
    return view('kosar');
})->middleware(['auth', 'verified'])->name('kosar');

Route::get('/ujtermek', [UjTermekController::class, 'index'])->middleware(['auth', 'verified'])->name('ujtermek.index');
Route::post('/ujtermek', [UjTermekController::class, 'store'])->middleware(['auth', 'verified'])->name('ujtermek.store');

Route::get('termekek', [TermekController::class,'index'])->middleware(['auth', 'verified'])->name('termekek.index');

Route::get('rendeleseim', [RendeleseimController::class,'index'])->middleware(['auth', 'verified'])->name('rendeleseim.index');
Route::get('rendelesek', [RendelesekController::class,'index'])->middleware(['auth', 'verified'])->name('rendelesek.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
