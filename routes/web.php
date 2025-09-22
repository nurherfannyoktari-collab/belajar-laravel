<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
    return view('layout.app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/test', function () {
    return 'Hello,Laravel 11!';
});

Route::get('/mahasiswa', [MahasiswaController::class, 'showTable']);


Route::get('/users',[UserController::class,'index']);

Route::get('/users/{id}',[UserController::class,'show']);

Route::get('/page',[PageController::class,'home']);

Route::get('/pages',[PageController::class,'about']);

//Route::get('/mahasiswa',[MahasiswaController::class,'index']);

//create data
//Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
//Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');


//read data
//Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// update data
//Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
//Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

//menghapus data
// delete data
//Route::post('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::resource('siswa', SiswaController::class);

Route::get('/siswa', function () {
    return view('siswa.index'); // pastikan file resources/views/siswa/index.blade.php ada
});

// create data
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

// read data
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

// update data
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');

// delete data
Route::post('/siswa/{id}/delete', [SiswaController::class, 'destroy'])->name('siswa.destroy');


Route::resource('siswa', \App\Http\Controllers\SiswaController::class);
