<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PraktikumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DaftarHadirController;
use App\Http\Controllers\PelaksanaanController;
use App\Http\Controllers\UjianController;
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
Route::post('/mahasiswa/register/', [MahasiswaController::class, 'create'])->name('register.custom');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/admin/', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/praktikum/', [PraktikumController::class, 'index'])->name('praktikum');
Route::get('/admin/pendaftaran/', [PendaftaranController::class, 'admin'])->name('admin.pendaftaran');
Route::get('/admin/login/', [AdminController::class, 'login'])->name('login-admin');
Route::post('/admin/auth/', [AdminController::class, 'auth'])->name('admin.login');
Route::get('/mahasiswa/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/mahasiswa/verification', [PendaftaranController::class, 'daftar'])->name('daftar');
Route::get('/mahasiswa/registration', [MahasiswaController::class, 'register'])->name('register');
Route::get('/mahasiswa/profile/', [ProfileController::class, 'profile'])->name('profile');
Route::get('/mahasiswa/daftar-hadir/', [DaftarHadirController::class, 'index'])->name('daftar-hadir');
Route::get('/mahasiswa/pelaksanaan-praktikum/', [PelaksanaanController::class, 'index'])->name('pelaksanaan');
Route::get('/mahasiswa/pelaksanaan-ujian-praktikum/', [UjianController::class, 'index'])->name('ujian');