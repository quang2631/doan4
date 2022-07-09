<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;
use \DateTime;
class apinewscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return news::all();
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
        $db = new news();
        $db->title = $request->title;
        $db->content =$request->content;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        return news::findOrFail($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $id)
    {
        $db = news::find($id);
        $db->title = $request->title;
        $db->content =$request->content;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        news::findOrFail($id)->delete();
        return "Deleted";
        //
    }
}
