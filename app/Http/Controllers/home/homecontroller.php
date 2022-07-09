<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function showindex()
    {
        return view('home.home');
    }
    public function showchitietsanpham()
    {
        return view('home.chitietsanpham');
    }
    public function showgiohang()
    {
        return view('home.giohang');
    }
    public function showthanhtoan()
    {
        return view('home.thanhtoan');
    }
    public function showdanhmuc()
    {
        return view('home.danhmuc');
    }

}
