<?php

use App\Http\Controllers\CustomerController;
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
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('user-login-page');
});
Route::get('/signup', function () {
    return view('signup-page');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::post('/login',[CustomerController::class,'loginUser'])->name('login-user');
Route::post('/signup',[CustomerController::class,'registerUser'])->name('register-user');

Route::get('auth/google',[CustomerController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[CustomerController::class,'callbackGoogle']);

Route::get('/', function () {
    Mail::to('bjcrest123@gmail.com')
    ->send(new HelloMail());
});

Route::get('/contact-us',[ContactController::class,'contact']);

Route::post('/sendmessage',[ContactController::class,'sendEmail'])->name('contact.send');

