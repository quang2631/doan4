<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;
use \DateTime;
class apiuserscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return users::all();
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
        $db = new users();
        $db->full_name  = $request->full_name ;
        $db->users_name  = $request->users_name ; 
        $db->email = $request->email;
        $db->password = $request->password;
        $db->phone  = $request->phone ;
        $db->address = $request->address;
        $db->Delet = $request->Delet;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = users::find($id);
        $db->full_name  = $request->full_name ;
        $db->users_name  = $request->users_name ; 
        $db->email = $request->email;
        $db->password = $request->password;
        $db->phone  = $request->phone ;
        $db->address = $request->address;
        $db->Delet = $request->Delet;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        users::findOrFail($id)->delete();
        return "Deleted";
    }
}
