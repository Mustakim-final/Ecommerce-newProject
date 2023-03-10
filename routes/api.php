<?php

use App\Http\Controllers\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//user registration

Route::post('/user/reg',[UserApiController::class,'reg']);
Route::post('/user/multipule/reg',[UserApiController::class,'multipulereg']);

//user show

Route::get('/user/single/{id}',[UserApiController::class,'singleuser']);
Route::get('/user/multiple',[UserApiController::class,'multipleuser']);
