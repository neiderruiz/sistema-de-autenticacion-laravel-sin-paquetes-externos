<?php

use App\Http\Controllers\Auth\AuthController;
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
    return view('welcome');
});


Route::middleware('throttle')->prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'loginForm'])->name('login.index');
    Route::post('login', [AuthController::class, 'loginVerify'])->name('login.verify');
    Route::get('register', [AuthController::class, 'registerForm'])->name('register.index');
    Route::post('register', [AuthController::class, 'registerVerify'])->name('register.verify');
    Route::post('sign-out', [AuthController::class, 'signOut'])->name('sign-out');
});

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('', function () {
        return view('dashboard.index');
    })->name('dashboard.index');
});
