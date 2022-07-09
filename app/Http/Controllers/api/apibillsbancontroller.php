<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\billsban;
use App\Models\billdetailban;
use \DateTime;
class apibillsbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return billsban::all();
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
        $db = new billsban();
        $db->hoten = $request->hoten;
        $db->diachi = $request->diachi;
        $db->sodienthoai = $request->sodienthoai;
        $db->status = 1;
        $db->tong_tien = $request->tong_tien;
        $db->payment = $request->payment;
        $db->created_at = new Datetime();
        $db->save();
        if(count($request->billdetail)>0){
            foreach ($request->billdetail as $item)
            {
                $db1 = new billdetailban();
                $db1->id_bill_ban = $db->id;
                $db1->id_sp = $item['id'];
                $db1->sl = $item['quantity'];
                $db1->save($item);
            }
        }
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
        return billsban::findOrFail($id);
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
        $db = billsban::find($id);
        $db->id_kh = $request->id_kh;
        $db->tong_tien = $request->tong_tien;
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
        billsban::findOrFail($id)->delete();
        return "Deleted";
    }
}