<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\fund;
use App\Http\Controllers\Login;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\profile;
use App\Http\Controllers\Register;
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
    return view('home.home');
})->name('home');

Route::get('/register', [Register::class, "index"])->name('register');
Route::post('/register', [Register::class, "store"])->name('register');

Route::get('/login', [Login::class, "index"])->name('login');
Route::post('/login', [Login::class, "store"])->name('login');

Route::get('/dashboard', [dashboard::class, "index"])->name('dashboard');

Route::get('/profile', [profile::class, "index"])->name('profile');
Route::post('/profile', [profile::class, "updateprofile"])->name('profile');
Route::post('/profilephoto', [profile::class, "photoupdate"])->name('profileimage');
Route::post('/profilepass', [profile::class, "updatepassword"])->name('profilepass');

Route::get('/fund', [fund::class, "index"])->name('fund');

Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
