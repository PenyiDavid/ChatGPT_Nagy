<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermekController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UjTermekController;

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


Route::get('/rendeleseim', function () {
    return view('rendeleseim');
})->middleware(['auth', 'verified'])->name('rendeleseim');
Route::get('/kosar', function () {
    return view('kosar');
})->middleware(['auth', 'verified'])->name('kosar');

Route::get('/ujtermek', [UjTermekController::class, 'index'])->name('ujtermek.index');
Route::post('/ujtermek', [UjTermekController::class, 'store'])->name('ujtermek.store');

Route::get('termekek', [TermekController::class,'index'])->name('termekek.index');

Route::get('/mindenrendeles', function () {
    return view('mindenrendeles');
})->middleware(['auth', 'verified'])->name('mindenrendeles');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
