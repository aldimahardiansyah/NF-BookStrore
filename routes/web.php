<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
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

Route::get('/daftar', [LoginController::class, 'daftar'])->middleware('guest');

Route::post('/store', [LoginController::class, 'store']);

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/dologin', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::post('/search', [BookController::class, 'search']);

Route::get('/stok', [BookController::class, 'stok']);

Route::get('/keranjang', [KeranjangController::class, 'index']);

Route::post('/keranjang/tambah', [KeranjangController::class, 'store']);

Route::get('/keranjang/delete/{id}', [KeranjangController::class, 'destroy']);

Route::get('/admin', function(){
    return view('admin.produk.index', [
        'title' => 'Semua Produk'
    ]);
});

Route::get('/admin/produk/add', function(){
    return view('admin.produk.add', [
        'title' => 'Tambah Produk'
    ]);
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

Route::get('/FAQ', function(){
    return view('contents.faq', [
        'title' => 'FAQ'
    ]);
});