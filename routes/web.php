<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\InvestasiController;

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
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::get('/admin1', function () {
    return view('layouts.admin1');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/surat', SuratController::class);
Route::resource('/divisi', DivisiController::class);
Route::resource('/format', FormatController::class);
Route::resource('/investasi', InvestasiController::class);

