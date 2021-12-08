<?php

use App\Http\Controllers\PenyewaController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('SuperAdmin.home');
});

Route::get('/home/user', function () {
    return view('User.home');
});

Route::resource('penyewa', PenyewaController::class);

Route::resource('transaksi', PenyewaController::class);

