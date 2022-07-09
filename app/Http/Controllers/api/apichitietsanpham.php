<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sanpham;

class apichitietsanpham extends Controller
{
    public function index($id)
    {
        $sanpham = sanpham::where('id',$id)->get();
        return $sanpham;
    }
}
