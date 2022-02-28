<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;
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


Route::get('/', [MahasiswaController::class, 'index'])->name('/');
Route::get('/mahasiswa/login/', [LoginController::class, 'index'])->name('login');
Route::post('/mahasiswa/login/', [LoginController::class, 'login'])->name('login.custom');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/admin/', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/login/', [AdminController::class, 'login'])->name('login-admin');
Route::post('/admin/auth/', [AdminController::class, 'auth'])->name('admin.login');
Route::get('/mahasiswa/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/mahasiswa/verification', [PendaftaranController::class, 'daftar'])->name('daftar');