<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtsController;

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

Route::get('barang/{id}', [ProductController::class, 'show'])->name('barang.show');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/rahasia', function () {
    return 'Halaman rahasia hanya untuk admin';
})->middleware(['auth', 'RoleCheck:admin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'RoleCheck:admin,owner'])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'verified', 'RoleCheck:admin'])->group(function(){
    Route::get('/', function() {
        return view ('admin');
    })-> name('admin');
    Route::get('/dashboard', function() {
        return '<h1 style="text-align: center">Admin Dashboard</h1>';
    })-> name('admin dashboard');
    Route::get('/profile', function () {
        return '<h1 style="text-align: center">Admin Profile</h1>';
    })-> name('admin profile');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('uts')->group(function(){
    Route::get('/', [UtsController::class, 'index'])->name('uts.index');
    Route::get('/pemrograman', [UtsController::class, 'pemrograman'])->name('uts.pemrograman');
    Route::get('/database', [UtsController::class, 'database'])->name('uts.database');
});

// Route::prefix('product')->group(function(){
//     Route::get('/', [ProductController::class, 'index'])->name('product.index');
//     Route::get('/create', [ProductController::class, 'create'])->name('product.create');
//     Route::post('/', [ProductController::class, 'store'])->name('product.store');
//     Route::get('/{id}', [ProductController::class, 'show'])->name('product.show');
//     Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
//     Route::put('/{id}', [ProductController::class, 'update'])->name('product.update');
//     Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
// });



Route::get('/route_cont/{id}', [ProductController::class, 'show']); 
Route::prefix('product')->group(function () {
    Route::get('/{index}', [ProductController::class, 'index'])->name('product.index');
    Route::get('/check/{id}', [ProductController::class, 'ganjilgenap'])->name('product.ganjilgenap');
});

Route::get('/barang', function () {
    return view('barang', ['isi_data' => '1']);
})->name('barang');


require __DIR__.'/auth.php';
