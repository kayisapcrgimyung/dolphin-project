<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('pengumpulan')->group(function () {
    Route::get('/', [App\Http\Controllers\PengumpulanRest::class, 'index'])->name('pengumpulan.index');
    Route::post('/', [App\Http\Controllers\PengumpulanRest::class, 'store'])->name('pengumpulan.store');
    Route::get('/{id}', [App\Http\Controllers\PengumpulanRest::class, 'show'])->name('pengumpulan.show');
    Route::put('/{id}', [App\Http\Controllers\PengumpulanRest::class, 'update'])->name('pengumpulan.update');
    Route::delete('/{id}', [App\Http\Controllers\PengumpulanRest::class, 'destroy'])->name('pengumpulan.destroy');
});
