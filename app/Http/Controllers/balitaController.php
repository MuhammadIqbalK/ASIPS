<?php

namespace App\Http\Controllers;

use App\Models\balita;
use Illuminate\Http\Request;

class balitaController extends Controller
{
    public function index()
    {
        $a = balita::all();
        return view('tableview.balita',['a'=>$a]);
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
     * @param  \App\Models\table_balita  $table_balita
     * @return \Illuminate\Http\Response
     */
    public function show(balita $table_balita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\table_balita  $table_balita
     * @return \Illuminate\Http\Response
     */
    public function edit(balita $table_balita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\table_balita  $table_balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, balita $table_balita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\table_balita  $table_balita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = balita::find($id);
        $a->delete();
        return redirect('balita');
    }
}