<?php

use App\Http\Controllers\KuotaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemilikController;
use Database\Seeders\pemilik;
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
    return view('user');
});
Route::get('user', function () {
    return view('user');
})->name('user');
Route::get('setting', function () {
    return view('setting');
})->name('setting');

Route::get('laporan', [PelangganController::class, 'pel'])->name('laporan');
Route::post('user', [PelangganController::class, 'addData'])->name('user');
Route::get('edit/{id}', [PelangganController::class, 'editData'])->name('edit');
Route::patch('edit/{id}', [PelangganController::class, 'editProses'])->name('edit');
Route::delete('edit/{id}', [PelangganController::class, 'delete'])->name('edit');


Route::get('bio/{id}', [PemilikController::class, 'editData'])->name('bio');
Route::patch('bio/{id}', [PemilikController::class, 'editProses'])->name('bio');
