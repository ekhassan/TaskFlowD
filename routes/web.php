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
// Route::get('create', function () {
//     return view('pages.create');
// });




Route::get('dashboard',[AuthController::Class,'dashboard']);
Route::post('signin',[AuthController::class,'login']);
Route::post('register', [AuthController::class, 'reg']);
Route::get('signout',[AuthController::Class,'signout']);

// Task

// Route::get('/',[AuthController::class,'index']);

// Route::get('create',[AuthController::class,'createTaskView']);
// Route::post('create',[AuthController::class,'createtask'])->name('createtask');

Route::get('edit/{id}',[AuthController::class,'edit'])->name('taskedit');
Route::post('update/{id}',[AuthController::class,'update'])->name('taskupdate');

Route::get('delete/{id}',[AuthController::class,'delete'])->name('taskdelete');

