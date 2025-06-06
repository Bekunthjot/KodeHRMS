<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');


Route::get('/forgot_password', [UserController::class, 'forgotpassword']);
Route::post('/forgot_password',[UserController::class, 'forgotpassword'])->name('forgot_password');








Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});









/*Route::get('/login', function () {
    return view('auth.login');
});*/