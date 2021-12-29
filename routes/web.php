<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\KategoriController;
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

Route::get('/', [BookController::class, 'index']);

Route::get('/kategori/{id}', [KategoriController::class, 'show']);

Route::get('/detail/{id}', [BookController::class, 'detail']);

Route::get('/daftar', function () {
    return view('login.member', ["title" => "Daftar Member"]);
});

Route::get('/login', function () {
    return view('login.login', ["title" => "Login"]);
});

Route::get('/blog', function(){
    return view('contents.blog.blog', [
        'title' => 'Blog'
    ]);
});

Route::get('/blog/content', function(){ 
    return view('contents.blog.Content',[
        'title' => 'Content Blog'
    ]);
});