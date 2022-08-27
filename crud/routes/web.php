<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('home',[HomeController::class,'index'])->name('home');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('pegawai',[PegawaiController::class,'index'])->name('pegawai.index');
    Route::get('pegawai/create',[PegawaiController::class,'create'])->name('pegawai.create');
    Route::post('pegawai/store',[PegawaiController::class,'store'])->name('pegawai.store');
    Route::get('pegawai/edit/{id}',[PegawaiController::class,'edit'])->name('pegawai.edit');
    Route::post('pegawai/update/{id}',[PegawaiController::class,'update'])->name('pegawai.update');
    Route::delete('pegawai/destroy/{id}',[PegawaiController::class,'destroy'])->name('pegawai.destroy');
});
