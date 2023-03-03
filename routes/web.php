<?php

use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

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
        "name" => "Refi Maulana Aslam",
        "email" => "refi@gmail.com"
    ]);
});



// Route::get('/posts/{id}', [PostController::class, 'post']);
//page seluruh post
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [PostController::class, 'TitleCategory']);

//page login&logout authenticate
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', function(){
    return view('dashboard.index',);
})->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

//route dashboard 
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

//route categories "authorization"
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');




