<?php

use App\Http\Controllers\api\apihomecontroller;
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

use App\Http\Controllers\api\apisanphamcontroller;
Route::resource('products',apisanphamcontroller::class);

Route::resource('home',apihomecontroller::class);

use App\Http\Controllers\api\apikhocontroller;
Route::resource('khos',apikhocontroller::class);

use App\Http\Controllers\api\apiloaispcontroller;
Route::resource('loaisps',apiloaispcontroller::class);

use App\Http\Controllers\api\apinewscontroller;
Route::resource('newss',apinewscontroller::class);

use App\Http\Controllers\api\apinhanviencontroller;
Route::resource('nhanviens',apinhanviencontroller::class);

use App\Http\Controllers\api\apikhachhangcontroller;
Route::resource('khachhangs',apikhachhangcontroller::class);

use App\Http\Controllers\api\apinhacungcapcontroller;
Route::resource('nhacungcaps',apinhacungcapcontroller::class);

use App\Http\Controllers\api\apibillsbancontroller;
Route::resource('billsbans',apibillsbancontroller::class);

use App\Http\Controllers\api\apibillsnhapcontroller;
Route::resource('billsnhaps',apibillsnhapcontroller::class);

use App\Http\Controllers\api\apibilldetailbancontroller;

Route::resource('billdetailnhaps',apibilldetailbancontroller::class);

Route::get('billdetailbans/{id}','App\Http\Controllers\api\apibilldetailbancontroller@index');
Route::get('chitietsanpham/{id}','App\Http\Controllers\api\apichitietsanpham@index');
Route::get('danhmuc/{id}','App\Http\Controllers\api\apidanhmuc@index');