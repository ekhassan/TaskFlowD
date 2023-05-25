<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('pages.main');
});
Route::get('login', function () {
    return view('pages.login');
});
Route::get('register', function () {
    return view('pages.register');
});



Route::get('dashboard',[AuthController::Class,'dashboard']);
Route::post('signin',[AuthController::class,'login']);
Route::post('register', [AuthController::class, 'reg']);
Route::get('signout',[AuthController::Class,'signout']);
