<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/autentikasi', [AuthController::class, 'autentikasi']);


Route::get('/', [ProdukController::class, 'tampil_data'])->middleware('auth');

Route::get('/tampil-tambah', [ProdukController::class, 'tampil_tambah']);

Route::post('tambah-produk', [ProdukController::class, 'tambah_data']);

Route::get('/tampil-edit/{id}', [ProdukController::class, 'tampil_edit']);

Route::post('/edit-produk/{id}', [ProdukController::class, 'edit_data']);

Route::get('/hapus-produk/{id}', [ProdukController::class, 'hapus_data']);