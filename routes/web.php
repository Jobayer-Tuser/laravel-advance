<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;

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

Route::get('/', [ProductController::class, 'index'])->name('product.index');

#controller with passing argument with and without value
Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

#controller for return views
Route::get('/user', [UserController::class, 'index'])->name('user.index');

#controller for http client get request data
Route::get('/post', [ClientController::class, 'getAllPost'])->name('posts.getAllPost');
Route::get('/post/{id}', [ClientController::class, 'getPostById'])->name('posts.getPostById');
Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addPost');
Route::get('/update-post/{id}', [ClientController::class, 'updatePost'])->name('posts.updatePost');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.deletePost');

