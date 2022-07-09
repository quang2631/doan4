<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\loaisp;
use App\Models\sanpham;
use Illuminate\Http\Request;

class apidanhmuc extends Controller
{
    public function index($id)
    {
        // return sanpham::take(12)
    
        $product = sanpham::where('id_loai_sp',$id)->get();
        return ($product);
    
    }
}