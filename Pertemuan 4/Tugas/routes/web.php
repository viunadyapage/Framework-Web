<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//edit rahasia dari praktikum jadi laporan dan arahin yg bisa akses ke laporan cuma admin dan owner
Route::get('/laporan', function () {
    return view('laporan'); 
})->middleware(['auth', 'RoleCheck:admin,owner'])->name('laporan');

//untuk soal no 2 tambah angka 10
Route::get('/route_cont/{id}', action: [ProductController::class, 'index']);

require __DIR__.'/auth.php';
