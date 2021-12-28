<?php

namespace App\Http\Controllers;

use App\Models\balita;
use App\Models\kelurahan;
use App\Models\posyandu;
use Illuminate\Http\Request;

class posyanduController extends Controller
{
    public function index()
    {
        $dataposyandu = posyandu::all();
        return view('table_posyandu.posyandu', ['dataposyandu' => $dataposyandu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_kelurahan = kelurahan::all();

        return view('table_posyandu.posyanducreate', [
            'title'           => 'Tambah Data Posyandu',
            'table_kelurahan' => $table_kelurahan
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
            'nama_posyandu'     => $request->nama_posyandu,
            'alamat_posyandu'   => $request->alamat_posyandu,
            'id_kelurahan'      => $request->id_kelurahan
        ];

        // save input value to model
        posyandu::create($input);

        // redirect back to posyandu
        return redirect('/posyandu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\posyandu  $table_posyandu
     * @return \Illuminate\Http\Response
     */
    public function show(posyandu $table_posyandu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function edit(posyandu $posyandu)
    {
        $table_kelurahan = kelurahan::all();
        return view('table_posyandu.posyanduedit', [
            'dataposyandu'      => $posyandu,
            'table_kelurahan'   => $table_kelurahan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posyandu $posyandu)
    {
        // input value from request
        $input = [
            'nama_posyandu'     => $request->nama_posyandu,
            'alamat_posyandu'   => $request->alamat_posyandu,
            'id_kelurahan'      => $request->id_kelurahan
        ];

        posyandu::where('id', $posyandu->id)
            ->update($input);

        return redirect('/posyandu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function destroy(posyandu $posyandu)
    {
        // ambil data balita
        $databalita = balita::where('id_posyandu', $posyandu->id)->get();

        // cek apakah ada id posyandu di data balita
        foreach ($databalita as $balita) {
            if ($balita->id_posyandu == $posyandu->id) {
                return redirect('/posyandu')->with('error', 'Masih ada balita yang terdaftar di Posyandu ini !');
            }
        }

        // delete posyandu data
        posyandu::destroy($posyandu->id);

        // redirect back to posyandu
        return redirect('/posyandu');
    }
}
