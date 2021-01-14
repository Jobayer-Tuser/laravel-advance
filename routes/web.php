<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\EmailController;
use App\CustomFacades\Payment;
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
//Route::get('/{locale}', function($locale){
//	App::setLocale($locale);
//	return view('welcome');
//});

Route::get('/payment', function(){
	return Payment::process();
});

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

#fluent string routes
Route::get('/fluent-string', [FluentController::class , 'index'])->name('fluent.index');

#http request method routes
Route::get('/student', [StudentController::class, 'index'])->name('student.index');

#route login form get request
//Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

#session route
Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');
Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');
Route::get('/session/remove', [SessionController::class, 'removeSessionData'])->name('session.remove');
Route::get('/session/remove', [SessionController::class, 'removeSessionData'])->name('session.remove');

#post route
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/create-posts', [PostsController::class, 'create'])->name('posts.create');
Route::post('/save-posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('/inner-join', [PostsController::class, 'innerJoinClause'])->name('posts.innerJoin');
Route::get('/left-join', [PostsController::class, 'leftJoinClause'])->name('posts.leftJoin');
Route::get('/right-join', [PostsController::class, 'rightJoinClause'])->name('posts.rightJoin');

#route for sending mail
Route::get('/send-email', [EmailController::class, 'sendMail']);
