<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\riwayatController;
use App\Http\Controllers\tugasController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\pengumpulanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\user2Controller;

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
    return view('dashboard');
})->name('dashboard')->middleware('iniLogin');


Route::get('/user/index', function () {
    return view('user.index');
})->name('user.index');

Route::resource('menu', MenuController::class)->middleware('iniLogin');

Route::resource('riwayat', riwayatController::class)->middleware('iniLogin');

Route::get('/user/index', [user2Controller::class, 'index'])
     ->name('user.index');

Route::resource('tugas', tugasController::class)->middleware('iniLogin');

Route::resource('siswa', siswaController::class)->middleware('iniLogin');

Route::resource('guru', guruController::class)->middleware('iniLogin');

Route::resource('pengumpulan', pengumpulanController::class)->middleware('iniLogin');

Route::post('/kirim-pengumpulan', [pengumpulanController::class, 'kirim'])->name('pengumpulan.kirim');


Route::get('/login',[SessionController::class, 'index'])->middleware('iniAdmin');
Route::get('sesi',[SessionController::class, 'index'])->middleware('iniAdmin');
Route::post('/sesi/login',[SessionController::class, 'login'])->middleware('iniAdmin');
Route::get('/sesi/logout',[SessionController::class, 'logout']);