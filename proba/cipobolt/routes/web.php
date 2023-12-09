<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/rendeleseim', function () {
    return view('rendeleseim');
})->middleware(['auth', 'verified'])->name('rendeleseim');
Route::get('/kosar', function () {
    return view('kosar');
})->middleware(['auth', 'verified'])->name('kosar');

Route::get('/ujtermek', function () {
    return view('ujtermek');
})->middleware(['auth', 'verified'])->name('ujtermek');
Route::get('/mindenrendeles', function () {
    return view('mindenrendeles');
})->middleware(['auth', 'verified'])->name('mindenrendeles');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
