<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('posts',function(){
//     // return ("posts");
//     p("working");
// });

// Route::post('posts',function(){
//     return response()->json('Api hit successfully');
// });

// Route::delete('posts/{id}',function($id){
//     return response($id,200);
// });

Route::post('posts',[ApiController::class,'store']);