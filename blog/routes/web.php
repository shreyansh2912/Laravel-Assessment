<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
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

Route::get('/register',[AuthController::class,'index'])->middleware('guest');
Route::post('/register',[AuthController::class,'store']);

Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'login_validation']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('home',[HomeController::class,'index']);

Route::get('Author/dashboard',[AuthorController::class,'index']);

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/dashboard',[AdminController::class,'index']);
    Route::get('/author',[AdminController::class,'author_list']);
});
// Route::prefix('/Admin',function(){
//     Route::get('/dashboard',AdminController::class,'index');
// });

// Route::resource('posts', 'PostController');
// Route::resource("/posts","\App\Http\Controllers\PostController");
// Route::get("/posts",[PostController::class,'index']);


Route::get("/form",function(){
    return view("layout.Author.form");
}
);

