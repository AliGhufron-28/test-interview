<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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


Route::get('/',[BarangController::class,'tampil']);
Route::get('/tambah',[BarangController::class,'tambah']);
Route::post('/save',[BarangController::class,'save']);
Route::get('/{id}/ubah',[BarangController::class,'ubah']);
Route::put('/{id}',[BarangController::class,'update']);
Route::delete('/{id}',[BarangController::class,'hapus']);