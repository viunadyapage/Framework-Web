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

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

Route::get(uri: '/rahasia', action: function ():string {
    return 'Halaman ini halaman rahasia';
})->middleware(['auth', 'RoleCheck:admin']);

Route::group(['prefix' => 'admin'], function() {
    Route::get('/langsung', function() {
        echo "ini ditampilkan dari route langsung";
    });

    Route::get('/group_route_satu', function() {
        echo "ini ditampilkan dari function rutes langsung";
    });
});
Route::get('/route_cont/{id}', action: [ProductController::class, 'show']);

Route::get('/langganan', function() {
    return view('langganan');
});

//Create
Route::get('/product/create', [ProductController::class, 'create'])->name('product-create');
Route::post('/product', [ProductController::class, 'store'])->name('product-store');
// Read 
Route::get('/product', [ProductController::class, 'index'])->name('product-index');
// Edit 
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
// Update 
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product-update');
// Delete 
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product-destroy');
// Export to Excel
Route::get('/products/export-excel', [ProductController::class, 'exportExcel'])->name('products-export-excel');

require __DIR__.'/auth.php';
