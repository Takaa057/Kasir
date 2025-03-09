<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
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

// Route::get('/', function () {
//     return view('admin.blank.index');
// });

ROute::middleware(['guest'])->group(function(){
    Route::get('/', [AuthController::class, 'index']);
    Route::post('/', [AuthController::class, 'login']);
});

Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
});


Route::resource('pelanggan', PelangganController::class);

Route::resource('produk', ProdukController::class);

Route::resource('penjualan', PenjualanController::class);
