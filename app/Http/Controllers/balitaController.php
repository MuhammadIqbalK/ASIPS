<?php

namespace App\Http\Controllers;

use App\Models\balita;
use App\Models\history_posyandu;
use App\Models\posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class balitaController extends Controller
{
    public function index()
    {
        $a = balita::all();
        return view('table_balita.balita', ['a' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_posyandu = posyandu::all();
        $jeniskelamin = [
            'L'   => 'Laki-Laki',
            'P'   => 'Perempuan'
        ];

        $status = [
            '0'   => 'Belum ke Posyandu',
            '1'   => 'Sudah ke Posyandu'
        ];

        return view('table_balita.balitacreate', [
            'title'           => 'Tambah Data Balita',
            'table_posyandu' => $table_posyandu,
            'jeniskelamin'   => $jeniskelamin,
            'status'         => $status
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
        // validate file input image
        $validateImage = $request->validate([
            'foto_balita'   => 'image'
        ]);

        // save to file folder
        if ($request->file('foto_balita')) {
            $validateImage['foto_balita'] = $request->file('foto_balita')->store('foto-balita');
        }

        // input value from request
        $input = [
            'nama_balita'       => $request->nama_balita,
            'tgllahir_balita'   => $request->tgllahir_balita,
            'jk_balita'         => $request->jk_balita,
            'status'            => $request->status,
            'nik_ortu'          => $request->nik_ortu,
            'nama_ortu'         => $request->nama_ortu,
            'id_posyandu'       => $request->id_posyandu,
            'foto_balita'       => $validateImage['foto_balita']
        ];

        // save input value to model
        balita::create($input);

        // redirect back to balita
        return redirect('/balita');
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
    public function edit($id)
    {
        $databalita = balita::find($id);
        $table_posyandu = posyandu::all();
        $jeniskelamin = [
            'L'   => 'Laki-Laki',
            'P'   => 'Perempuan'
        ];

        $status = [
            '0'   => 'Belum ke Posyandu',
            '1'   => 'Sudah ke Posyandu'
        ];

        return view('table_balita.balitaedit', [
            'title'           => 'Tambah Data Balita',
            'table_posyandu' => $table_posyandu,
            'databalita'     => $databalita,
            'jeniskelamin'   => $jeniskelamin,
            'status'         => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\table_balita  $table_balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate file input image
        $validateImage = $request->validate([
            'foto_balita'   => 'image'
        ]);

        // save to file folder
        if ($request->file('foto_balita')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateImage['foto_balita'] = $request->file('foto_balita')->store('foto-balita');
            $input['foto_balita'] = $validateImage['foto_balita'];
        }

        // input value from request
        $input = [
            'nama_balita'       => $request->nama_balita,
            'tgllahir_balita'   => $request->tgllahir_balita,
            'jk_balita'         => $request->jk_balita,
            'status'            => $request->status,
            'nik_ortu'          => $request->nik_ortu,
            'nama_ortu'         => $request->nama_ortu,
            'id_posyandu'       => $request->id_posyandu
        ];

        // save input value to model
        balita::where('id', $id)
            ->update($input);

        // redirect back to balita
        return redirect('/balita');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $balita = balita::find($id);
        $datahistory = history_posyandu::where('id_balita', $id)->get();

        foreach ($datahistory as $history) {
            if ($history->id_balita == $id) {
                return redirect('/balita')->with('error', 'Balita masih terdaftar di History !');
            }
        }

        if ($balita->foto_balita) {
            Storage::delete($balita->foto_balita);
        }
        // delete balita data
        balita::destroy($id);

        // redirect back to balita
        return redirect('/balita');
    }
}
