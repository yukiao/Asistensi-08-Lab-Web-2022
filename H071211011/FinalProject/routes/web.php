<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LikeController;

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


// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });

// Route::get('/post', function () {
//     return view('admin/post');
// });



Auth::routes(['verify'=>true]);

Route::get('/', [HomeController::class, 'index']);

Route::get('/cek-role', function () {
    if (auth()->user()->hasRole(['admin', 'member'])) {
        return redirect('/dashboard');
    } else {
        return redirect('/');
    }
});

Route::group(['middleware' => ['verified','role:admin|member']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/category', CategoryController::class);
    Route::get('/category/{id}/konfirmasi', [CategoryController::class,'konfirmasi']);
    Route::get('/category/{id}/delete', [CategoryController::class,'delete']);
    Route::post('/category/search', [CategoryController::class, 'index']);
    
    Route::resource('/tag', TagController::class);
    Route::get('/tag/{id}/konfirmasi', [TagController::class,'konfirmasi']);
    Route::get('/tag/{id}/delete', [TagController::class,'delete']);
    Route::post('/tag/search', [TagController::class, 'index']);
    
    Route::resource('/post', PostController::class);
    Route::get('/post/{id}/konfirmasi', [PostController::class, 'konfirmasi']);
    Route::get('/post/{id}/delete', [PostController::class, 'delete']);
    Route::post('/post/search', [PostController::class, 'index']);

    Route::group(['middleware' => ['role:member']], function () {
    Route::get('/like/{id}', [LikeController::class, 'like']);
    Route::post('/save-comment/{slug}', [ArtikelController::class, 'comment']);
    });

    Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('/pengguna', PenggunaController::class);
    Route::get('/pengguna/{id}/konfirmasi', [PenggunaController::class, 'konfirmasi']);
    Route::get('/pengguna/{id}/delete', [PenggunaController::class, 'delete']);
    Route::post('/pengguna/search', [PenggunaController::class, 'index']);
    });
});

Route::get('/', [ArtikelController::class, 'home']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/{slug}', [ArtikelController::class, 'artikel']);
Route::get('/artikel-kategori/{slug}', [ArtikelController::class, 'kategori']);
Route::get('/artikel-tag/{slug}', [ArtikelController::class, 'tag']);
Route::get('/artikel-author/{id}', [ArtikelController::class, 'author']);
