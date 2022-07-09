<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Redirect;

class logincontroller extends Controller
{
    public function loginadmin(Request $request)
    {
        $users_username = $request->users_username;
        $users_password =$request->users_password;
        $result = DB::table('users')
        ->where('users_name',$users_username)
        ->where('password',$users_password)
        ->first();
        if($result)
        {
            return Redirect::to('/admin/sanpham');
        }
        else{
            return Redirect::to('admin/login');
        }
    }
}


