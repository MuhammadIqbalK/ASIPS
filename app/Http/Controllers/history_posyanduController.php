<?php

namespace App\Http\Controllers;

use App\Models\history_posyandu;
use Illuminate\Http\Request;

class history_posyanduController extends Controller
{
    public function index()
    {
        $datahistory = history_posyandu::all();
        return view('table_history_posyandu.history',['datahistory'=>$datahistory]);
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
     * @param  \App\Models\table_history_posyandu  $table_history_posyandu
     * @return \Illuminate\Http\Response
     */
    public function show(history_posyandu $table_history_posyandu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\history_posyandu  $table_history_posyandu
     * @return \Illuminate\Http\Response
     */
    public function edit(history_posyandu $table_history_posyandu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\table_history_posyandu  $table_history_posyandu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, history_posyandu $table_history_posyandu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\history_posyandu  $table_history_posyandu
     * @return \Illuminate\Http\Response
     */
    public function destroy(history_posyandu $table_history_posyandu)
    {
        //
    }
}