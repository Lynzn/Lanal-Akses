<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\PersonilController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// == controlller for all admin page ==

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/personil', [PersonilController::class, 'index']);

//pegawai pns
Route::get('/admin/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/admin/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/admin/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/admin/pegawai/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');
Route::get('/admin/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/admin/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/admin/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

//data admins
Route::get('/admin/tambahuser', [AdminsController::class, 'index'])->name('tambahuser.index');
Route::get('/admin/tambahuser/create', [AdminsController::class, 'create'])->name('tambahuser.create');
Route::post('/admin/tambahuser', [AdminsController::class, 'store'])->name('tambahuser.store');
Route::get('/admin/tambahuser/{id}', [AdminsController::class, 'show'])->name('tambahuser.show');
Route::get('/admin/tambahuser/{id}/edit', [AdminsController::class, 'edit'])->name('tambahuser.edit');
Route::put('/admin/tambahuser/{id}', [AdminsController::class, 'update'])->name('tambahuser.update');
Route::delete('/admin/tambahuser/{id}', [AdminsController::class, 'destroy'])->name('tambahuser.destroy');


