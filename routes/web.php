<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;


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
    return view('about',[
        "title" => "About",
        "name" => "Indie Surya",
        "email" => "putuindie11@gmail.com",
        "image" => "1.jpg"
    ]);
});

//halaman semua post
Route::get('/blog', [PostController::class, 'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//halaman semua ketegori
Route::get('/categories',[CategoryController::class,'index']);
//halaman single category
Route::get('categories/{category:slug}',[CategoryController::class,'show']);