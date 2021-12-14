<?php

namespace App\Http\Controllers;

use App\Models\kecamatan;
use Illuminate\Http\Request;

class kecamatanController extends Controller
{
    public function index()
    {
        $b = kecamatan::all();
        return view('table_kecamatan.kecamatan',['b'=>$b]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->input();//insert into
      
		
		$b = new kecamatan();// table
        
        //value
        $b->kecamatan    = $data['nama_kecamatan'];
        $b->id    = $data['id_kecamatan'];
		$b->save();//tombol run sqlyog

        return redirect('/kecamatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $table_kecamatan = kecamatan::all();
        return view('table_kecamatan/kecamatancreate', [
            'title' => 'Tambah Data kecamatan',
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
        $table_kecamatan = Kecamatan::find($id);
        
        return view('table_kecamatan/kecamatanedit',[
            
            'table_kecamatan' => $table_kecamatan
        ]);
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
        $b = Kecamatan::where('id', $id);
        $b->update([
            'kecamatan' => $request->kecamatan,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/kecamatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = kecamatan::find($id);
        $b->delete();
        return redirect('kecamatan');
    }
}