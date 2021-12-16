<?php

use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\ReportPenyediaController;
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

// Route::get('/', function () {
//     return view('User.home');
// })->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/admin/home', [SuperAdminController::class, 'home']);

Route::get('/home/user', function () {
    return view('User.home');
});

Route::resource('admin', SuperAdminController::class);

Route::resource('penyewa', PenyewaController::class);

Route::resource('transaksi', PenyewaController::class);

Route::resource('penyedia', PenyewaController::class);

Route::resource('kamar', KamarController::class);

Route::resource('Report', ReportPenyediaController::class);

Route::get('/home/detail-kost', function () {
    return view('User.detail');
});

Route::get('/booking/user', function () {
    return view('User.booking');
});
// Route::get('/booking/{id}', [UserController::class, 'booking']);

Route::get('/payment/user', function () {
    return view('User.payment');
});

Route::get('/report/user', function () {
    return view('User.report.create');
});

Route::get('/profile/user', function () {
    return view('User.profile');
});
