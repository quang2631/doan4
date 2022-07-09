<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\sanpham;
use Illuminate\Http\Request;

class apihomecontroller extends Controller
{
    public function index()
    {
        // return sanpham::take(12)
        // ->get();
        return sanpham::with('loaisp')->get();
    }
}
