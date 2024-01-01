<?php

use App\Http\Controllers\KosarController;
use App\Models\Rendeles;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermekController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UjTermekController;
use App\Http\Controllers\RendelesekController;
use App\Http\Controllers\RendeleseimController;
use App\Http\Controllers\TermekTorleseController;

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

Route::get('/termek', [TermekController::class, 'index']);
Route::get('/termek/filter', [TermekController::class, 'filterProducts'])->name('filterProducts');
Route::get('/termek/clear-filters', [TermekController::class, 'clearFilters'])->name('termek.clearFilters');

Route::get('/termektorles', [TermekTorleseController::class, 'index'])->name('termektorles.index');
Route::delete('/termek/torles/{termekId}', [TermekController::class, 'torles'])->name('termek.torles');

Route::get('/termekvasar', [KosarController::class, 'index'])->name('kosar.index');
Route::post('/termek/vasar/{termekId}', [TermekController::class, 'kosar'])->middleware(['auth', 'verified'])->name('termek.vasar');

require __DIR__.'/auth.php';
