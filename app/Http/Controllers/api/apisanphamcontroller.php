<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\loaisp;
use Illuminate\Http\Request;
use App\Models\sanpham;
use \DateTime;
class apisanphamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return sanpham::with('loaisp')->get();
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
        $db = new sanpham();
        $db->name = $request->name;
        $db->mota_sp =  $request->mota_sp;
        $db->id_ncc= $request->id_ncc;
        $db->image= $request->image;
        $db->Delet= $request->Delet;
        $db->so_luong= $request->so_luong;
        $db->id_loai_sp =  $request->id_loai_sp;
        $db->unit_price = $request->unit_price;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return sanpham::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = sanpham::find($id);
        $db->name = $request->name;
        $db->mota_sp =  $request->mota_sp;
        $db->id_ncc= $request->id_ncc;
        $db->image= $request->image;
        // $db->Delet= $request->Delet;
        $db->so_luong= $request->so_luong;
        $db->id_loai_sp =  $request->id_loai_sp;
        $db->unit_price = $request->unit_price;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sanpham::findOrFail($id)->delete();
        return "Deleted";
    }
}