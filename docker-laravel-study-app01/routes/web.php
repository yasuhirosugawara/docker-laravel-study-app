<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\BbsController;

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
Route::get('/posts',[PostController::class,'index']);
Route::get('/person',[PersonController::class,'index']);
Route::get('/bbs',[BbsController::class,'index']);
Route::post('/bbs',[BbsController::class,'create']);

//ルーティング定義の追加
Route::get('/home',function(){
    return view('home');
});
