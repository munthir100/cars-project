<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Modules\Acl\Http\Controllers\AuthController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('forgetPassword', [AuthController::class, 'forgetPassword'])->name('password.forget');
Route::get('resetPassword', [AuthController::class, 'resetPassword'])->name('password.reset');
Route::post('/logout', function () {
    Auth::logout();
    return to_route('login');
})->name('logout');
