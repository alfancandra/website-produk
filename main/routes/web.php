<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontEndController::class,'index'])->name('index');

// Pencarian Produk
Route::get('/cari', [FrontEndController::class,'cari'])->name('cari');
// Produk
Route::get('/produk', [FrontEndController::class,'produk'])->name('produk');
Route::get('/produk/{id}', [FrontEndController::class,'detail_produk'])->name('produk.detail');
// About
Route::get('/about', [FrontEndController::class,'about'])->name('about');
// Info
Route::get('/info', [FrontEndController::class,'info'])->name('info');


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.action');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::group(['middleware' => ["Admin"], 'as' => 'adm.'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboardadmin');
    Route::resource('/admin/produk', ProdukController::class);
    Route::get('/admin/produk/delete/{id}', [ProdukController::class,'destroy'])->name('produk.hapus');
});