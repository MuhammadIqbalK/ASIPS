<?php

namespace App\Http\Controllers;

use App\Models\kelurahan;
use App\Models\kecamatan;
use Illuminate\Http\Request;

class kelurahanController extends Controller
{
    public function index()
    
    {
        // $table_kelurahan = Kelurahan::with('table_kecamatan')->get();
        $c = kelurahan::all();
        return view('table_kelurahan.kelurahan',['c'=>$c]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datac = $request->input();//insert into
      
		
		$c = new kelurahan();// table
        
        //value
        $c->kelurahan    = $datac['nama_kelurahan'];
        $c->id_kecamatan    = $datac['id_kecamatan'];
		$c->save();//tombol run sqlyog

        return redirect('/kelurahan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $table_kecamatan = Kecamatan::all();
        
        return view('table_kelurahan/kelurahancreate', [
            'title' => 'Tambah Data kelurahan',
        'table_kecamatan'=>$table_kecamatan
            
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
   
    public function destroy($id)
    {
        $c = kelurahan::find($id);
        $c->delete();
        return redirect('kelurahan');
    }
}