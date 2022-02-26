<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
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


Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/login/', [LoginController::class, 'index'])->name('login');
Route::post('/mahasiswa/login/', [LoginController::class, 'login'])->name('login.custom');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');