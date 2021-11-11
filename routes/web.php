<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
//use App\Mail\SendEmail;
//use Illuminate\Support\Facades\Mail;

/*
|----------------------------d----------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);
Route::get('/login', [SessionsController::class, 'create'])->name('login.index')->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy')->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->name('register.index')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth.admin');

Route::resource('/user', UserController::class);//->middleware('auth.admin');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

/*Route::get('/email', function () {
    $correo= new SendEmail;
    Mail::to('nellyechp64@gmail.com')->send($correo);
    return "Mensaje enviado";
});*/

 