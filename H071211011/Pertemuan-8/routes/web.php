<?php

use App\Models\Akademik;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\RegisterController;



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



Route::get('/dataMhs', [AkademikController::class, 'index']);
Route::get('/dataMhs', function () {
    return view('akademik', [
        "title" => "Data Mahasiswa",
        'data' => DB::table('akademiks')->orderBy('updated_at','desc')->paginate(20)
    ]);
});
Route::post('/dataMhs/add', [AkademikController::class, 'store']);
Route::get('/dataMhs/add', [AkademikController::class, 'add']);
Route::get('/dataMhs/edit/{id}', [AkademikController::class, 'edit']);
Route::post('/dataMhs/update/{id}', [AkademikController::class, 'update']);
Route::get('/dataMhs/delete/{id}', [AkademikController::class, 'delete']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
