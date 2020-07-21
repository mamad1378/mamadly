<?php

namespace App\Http\Controllers;

use App\readLater;
use Illuminate\Http\Request;

class ReadLaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = '1';
        $readLaters = readLater::where('user_id' , $user_id)->get();
        return $readLaters;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\readLater  $readLater
     * @return \Illuminate\Http\Response
     */
    public function show(readLater $readLater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\readLater  $readLater
     * @return \Illuminate\Http\Response
     */
    public function edit(readLater $readLater)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\readLater  $readLater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, readLater $readLater)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\readLater  $readLater
     * @return \Illuminate\Http\Response
     */
    public function destroy(readLater $readLater)
    {
        //
    }
}
