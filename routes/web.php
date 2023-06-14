<?php

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

// Route::get('/', function () {
//     return view('addSiswa');
// });
Route::get('/kriteria', [App\Http\Controllers\KriteriaController::class, 'index']);
Route::post('/addKriteria', [App\Http\Controllers\KriteriaController::class, 'addSubKriteria']);
Route::post('/addSiswa', [App\Http\Controllers\SiswaController::class, 'addSiswa']);
Route::get('/dataSiswa', [App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/', [App\Http\Controllers\perhitunganController::class, 'index']);
