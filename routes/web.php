<?php

use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "sandhika galih",
        "email" => "sandhika@gmail.com"
    ]);
});



// Route::get('/posts/{id}', [PostController::class, 'post']);
//page seluruh post
Route::get('/posts', [PostController::class, 'index']);
//page keseluruhan post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
//page post berdasarkan category judul 
Route::get('/categories', [PostController::class, 'TitleCategory']);

//page login authenticate
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);



