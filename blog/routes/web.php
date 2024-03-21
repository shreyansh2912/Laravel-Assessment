<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::get('/register',[AuthController::class,'index']);
Route::get('/login',[AuthController::class,'login']);


// Route::resource('posts', 'PostController');
// Route::resource("/posts","\App\Http\Controllers\PostController");
// Route::get("/posts",[PostController::class,'index']);


Route::get("/form",function(){
    return view("layout.Author.form");
}
);

