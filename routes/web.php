<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;

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

Route::get('/', [homeController::class,'index'])->name('home');
Route::get('register_close', [homeController::class,'register_close'])->name('register_close');
Route::get('register_rb', [homeController::class,'register_rb'])->name('register_rb');
Route::post('register_save_rb', [homeController::class,'register_save_rb'])->name('register_save_rb');
Route::get('register_mtb', [homeController::class,'register_mtb'])->name('register_mtb');
Route::post('register_save_mtb', [homeController::class,'register_save_mtb'])->name('register_save_mtb');
Route::get('register_success/', [homeController::class,'register_success'])->name('register_success');
Route::get('rute/rb', [homeController::class,'rute_rb'])->name('rute/rb');
Route::get('rute/mtb', [homeController::class,'rute_mtb'])->name('rute/mtb');
Route::get('peserta', [homeController::class,'peserta_index'])->name('peserta');
Route::get('peserta/rb', [homeController::class,'peserta_rb'])->name('peserta/rb');
Route::get('peserta/mtb', [homeController::class,'peserta_mtb'])->name('peserta/mtb');
Route::get('info', [homeController::class,'info'])->name('info');
Route::get('handbook/{file}', [homeController::class,'handbook'])->name('handbook');
Route::get('login', [homeController::class,'login'])->name('login');
Route::post('login_aksi', [homeController::class,'login_aksi'])->name('login_aksi');
Route::get('logout', [homeController::class,'logout'])->name('logout');

Route::get('admin', [adminController::class,'index'])->name('admin')->middleware('ceklog');
Route::get('admin/peserta_rb/{file}', [adminController::class,'peserta_rb'])->name('admin/peserta_rb/')->middleware('ceklog');
Route::get('admin/tambah_rb/{file}', [adminController::class,'tambah_rb'])->name('admin/tambah_rb')->middleware('ceklog');
Route::post('admin/register_save_rb', [adminController::class,'register_save_rb'])->name('admin/register_save_rb');
Route::get('admin/edit_rb/{file}', [adminController::class,'edit_rb'])->name('admin/edit_rb')->middleware('ceklog');
Route::put('admin/edit_save_rb', [adminController::class,'edit_save_rb'])->name('admin/edit_save_rb');
Route::get('admin/hapus_rb/{file}', [adminController::class,'hapus_rb'])->name('admin/hapus_rb')->middleware('ceklog');



