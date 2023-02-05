<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\PemesananController;
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
Route::get('/produk/{id}/buy', [FrontEndController::class,'buy_produk'])->name('produk.buy');
Route::post('/produk/buy/{id}', [FrontEndController::class,'buy_produk_action'])->name('produk.buy.action');
// Pemesanan
Route::get('/pemesanan', [FrontEndController::class,'pemesanan'])->name('pemesanan');
// About
Route::get('/about', [FrontEndController::class,'about'])->name('about');
// Info
Route::get('/info', [FrontEndController::class,'info'])->name('info');


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register',[LoginController::class,'register_action'])->name('register.action');
Route::post('/login',[LoginController::class,'login'])->name('login.action');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::group(['middleware' => ["Admin"], 'as' => 'adm.'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboardadmin');
    Route::resource('/admin/produk', ProdukController::class);
    Route::get('/admin/produk/delete/{id}', [ProdukController::class,'destroy'])->name('produk.hapus');

    Route::resource('/admin/user',UserController::class);
    Route::get('/admin/user/delete/{id}', [UserController::class,'destroy'])->name('user.hapus');

    Route::get('/admin/info',[InfoController::class,'index'])->name('info.index');
    Route::post('/admin/info',[InfoController::class,'update'])->name('info.update');

    Route::get('/admin/pemesanan',[PemesananController::class,'index'])->name('pemesanan.index');
    Route::get('/admin/pemesanan/{id}',[PemesananController::class,'show'])->name('pemesanan.show');
    Route::get('/admin/pemesanan/set/{id}/{status}',[PemesananController::class,'set'])->name('pemesanan.set');
});