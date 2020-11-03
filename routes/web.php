<?php

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

Route::get('/', [\App\Http\Controllers\RegistrationController::class, 'registration']);
Route::post('/registration/save', [\App\Http\Controllers\RegistrationController::class, 'registrationStore']);
Route::get('/user/dashboard', [\App\Http\Controllers\RegistrationController::class, 'dashboard']);
Route::get('/user/login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::post('/user/loginCheck', [\App\Http\Controllers\LoginController::class, 'loginCheck']);
Route::get('/user/logout', [\App\Http\Controllers\LoginController::class, 'doLogout']);
Route::get('/license/create', [\App\Http\Controllers\Controller::class, 'create']);


Route::get('/user/{id}', [\App\Http\Controllers\Controller::class, 'userData']);
