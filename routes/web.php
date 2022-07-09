<?php

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
use App\Http\Controllers\sanphamcontroller;

use App\Http\Controllers\loaispcontroller;
use App\Http\Controllers\billsbancontroller;
use App\Http\Controllers\billsnhapcontroller;
use App\Http\Controllers\billdetailbancontroller;
use App\Http\Controllers\billdetailnhapcontroller;
use App\Http\Controllers\khachhangcontroller;
use App\Http\Controllers\khocontroller;
use App\Http\Controllers\migrationsspcontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\nhanviencontroller;
use App\Http\Controllers\ncccontroller;
use App\Http\Controllers\phanhoicontroller;
use App\Http\Controllers\quangcaocontroller;
use App\Http\Controllers\slidecontroller;
use App\Http\Controllers\userscontroller;

// Route::get('/admin/products', function () {
//     return view('admin.sanpham');
// });
Route::get('/admin/loaisps', function () {
    return view('admin.loaisp');
});
Route::get('/admin/ncc', function () {
    return view('admin.ncc');
});
Route::get('/admin/nhanvien', function () {
    return view('admin.nv');
});
Route::get('/admin/user', function () {
    return view('admin.user');
});
Route::get('/admin/products', function () {
    return view('admin.sanpham');
});
Route::get('/admin/khachhang', function () {
    return view('admin.kh');
});
Route::get('/admin/kho', function () {
    return view('admin.kho');
});
Route::get('/admin/tintuc', function () {
    return view('admin.tintuc');
});
Route::get('/admin/phanhoi', function () {
    return view('admin.phanhoi');
});
Route::get('/admin/sanpham', function () {
    return view('admin.sp');
});
Route::get('/admin/donhang', function () {
    return view('admin.donhang');
});
Route::get('/admin/chitietdonhang/{id_bill_ban}', function () {
    return view('admin.chitietdonhang');
});
Route::get('/admin/login', function () {
    return view('admin.login');
});
//home
Route::get('/home/index',[App\Http\Controllers\home\homecontroller::class,'showindex']);
Route::get('/home/chitietsanpham/{id}',[App\Http\Controllers\home\homecontroller::class,'showchitietsanpham']);
Route::get('/home/giohang',[App\Http\Controllers\home\homecontroller::class,'showgiohang']);
Route::get('/home/thanhtoan',[App\Http\Controllers\home\homecontroller::class,'showthanhtoan']);
Route::get('/home/danhmuc/{id}',[App\Http\Controllers\home\homecontroller::class,'showdanhmuc']);

Route::post('/admin-login',[\App\Http\Controllers\admin\logincontroller::class,'loginadmin']);



