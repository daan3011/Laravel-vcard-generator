<?php

use App\Http\Controllers\CreateVcardController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/user-dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/user-dashboard/statistics', [UserDashboardController::class, 'statistics'])->name('statistics');

Route::get('/user-dashboard/templates', [UserDashboardController::class, 'templates'])->name('templates');

Route::get('/user-dashboard/scroll', [UserDashboardController::class, 'scroll']);

Route::get('/create-vcard', [CreateVcardController::class, 'createVcard'])->name('vcard');

Route::get('/qr', [CreateVcardController::class, 'index'])->name('qrcode');

Auth::routes();

//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

