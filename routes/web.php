<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/members', App\Http\Controllers\MemberController::class);
Route::resource('/produks', App\Http\Controllers\ProdukController::class);
Route::resource('/kategoris', App\Http\Controllers\KategoriController::class);
Route::get('/api/members', [App\Http\Controllers\MemberController::class, 'api']);
Route::get('/api/kategoris', [App\Http\Controllers\KategoriController::class, 'api']);
