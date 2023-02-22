<?php

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;
use App\Models\Category;
use App\Models\User;

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
//page post berdasarkan category penulis
Route::get('/author/{author:username}', [PostController::class, 'author']);
//page post berdasarkan category judul 
Route::get('/categories', [PostController::class, 'TitleCategory']);
//page post berdasarkan judul 
Route::get('/categories/{category:slug}',[PostController::class, 'categories']);



