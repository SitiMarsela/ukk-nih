<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\MarsyarakatController;
use App\Http\Controllers\ShowpengaduanController;

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

Route::get('/', function () {
    return view ('tampilan');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Login Masyarakat

// Route::get('login', [LoginController::class, 'getlogin']);
// Route::post('login', [LoginController::class, 'masyarakatlogin'])->name('masyarakat-login');

// Route::get('/masyarakat', 'MarsyarakatController')->middleware('guest');
// Route::post('/login', 'LoginController@postLogin');
// Route::get('/logout', 'LoginController@logout');;

// ROUTE PENGADUAN

Route::get('/pengaduan', [PengaduanController::class, 'index']);
// route::get('/pengaduan', [PengaduanController::class, 'formpengaduan']);

Route::post('/simpan-pengaduan', [PengaduanController::class, 'simpan'])->name('simpan-pengaduan');

Route::get('/edit-pengaduan/{id}', [PengaduanController::class, 'edit'])->name('edit')->name('edit-pengaduan');
Route::put('/update-pengaduan/{id}', [PengaduanController::class, 'update'])->name('update-pengaduan');

Route::delete('/delete-pengaduan/{id}', [PengaduanController::class, 'destroy']);

// ROUTE PETUGAS

Route::get('/petugas', [PetugasController::class, 'index']);

Route::get('/showpengaduan', [ShowpengaduanController::class, 'index']);

// ROUTE ADMIN

