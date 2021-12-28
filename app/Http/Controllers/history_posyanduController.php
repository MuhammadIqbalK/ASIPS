<?php

namespace App\Http\Controllers;

use App\Models\balita;
use App\Models\history_posyandu;
use Illuminate\Http\Request;

class history_posyanduController extends Controller
{
    public function index()
    {
        $datahistory = history_posyandu::all();
        return view('table_history_posyandu.history', ['datahistory' => $datahistory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_balita = balita::all();

        return view('table_history_posyandu.historycreate', [
            'title'           => 'Tambah Data History Posyandu',
            'table_balita' => $table_balita
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // input value from request
        $input = [
            'tgl_posyandu'  => $request->tgl_posyandu,
            'id_balita'     => $request->id_balita,
            'bb_balita'     => $request->bb_balita,
            'tb_balita'     => $request->tb_balita
        ];

        // save input value to model
        history_posyandu::create($input);

        // redirect back to history
        return redirect('/history');
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
    public function edit($id)
    {
        $data_history = history_posyandu::find($id);
        $table_balita = balita::all();
        return view('table_history_posyandu.historyedit', [
            'datahistory'    => $data_history,
            'table_balita'   => $table_balita
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\table_history_posyandu  $table_history_posyandu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // input value from request
        $input = [
            'tgl_posyandu'  => $request->tgl_posyandu,
            'id_balita'     => $request->id_balita,
            'bb_balita'     => $request->bb_balita,
            'tb_balita'     => $request->tb_balita
        ];

        history_posyandu::where('id', $id)
            ->update($input);

        return redirect('/history');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\history_posyandu  $history_posyandu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete history posyandu data
        history_posyandu::destroy($id);

        // redirect back to history posyandu
        return redirect('/history');
    }
}
