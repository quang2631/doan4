<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\khachhang;
use Illuminate\Http\Request;
use \DateTime;
class apikhachhangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return khachhang::all();
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new khachhang();
        $db->ten_kh = $request->ten_kh;
        $db->dia_chi = $request->dia_chi;
        $db->email = $request->email;
        $db->sdt = $request->sdt;
        $db->note = $request->note;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        return khachhang::findOrFail($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function edit(khachhang $khachhang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = khachhang::find($id);
        $db->ten_kh = $request->ten_kh;
        $db->dia_chi = $request->dia_chi;
        $db->email = $request->email;
        $db->sdt = $request->sdt;
        $db->note = $request->note;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        khachhang::findOrFail($id)->delete();
        return "Deleted";
        //
    }
}
