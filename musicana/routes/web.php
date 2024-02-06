<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ragistar',[AuthController::class,'index']);
Route::post('/ragistar',[AuthController::class,'store']);


Route::get('/login',[AuthController::class,'login'] );
Route::post('/login',[AuthController::class,'validate_login'] );

Route::get('/admin-dashboard',[adminController::class,'index']);

Route::get('/admin-user',[UserController::class,'index']);

Route::get('/admin-SongList',[SongsController::class,'list']);

Route::put('/admin-SongList',[SongsController::class,'list']);

Route::get('/delete-song/{id?}',[SongsController::class,'destroy']);

Route::get('/update-song/{id?}',[SongsController::class,'edit']);
Route::post('/update-song/{id?}',[SongsController::class,'update']);

Route::get('/admin-addSongs',[SongsController::class,'index']);
Route::post('/admin-addSongs',[SongsController::class,'store']);

// Route::get('/admin-dashboard',[adminController::class,'show']);

Route::get('/home',[HomeController::class,'index']);
