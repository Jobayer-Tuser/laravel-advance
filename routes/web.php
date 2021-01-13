<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

#controller with passing argument with and without value
Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

#controller for return views
Route::get('/user', [UserController::class, 'index'])->name('user.index');