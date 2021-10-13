<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $table_user
     * @return \Illuminate\Http\Response
     */
    public function show(user $table_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $table_user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $table_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $table_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $table_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $table_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $table_user)
    {
        //
    }
}