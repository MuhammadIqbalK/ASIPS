@extends('layout.layout')

@section('content')



		
<br/>
<br/>

<form action={{ url('/kecamatancreate') }} method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="id">id Kecamatan</label>
        <input type="text" class="form-control" id="id" name="id kecamatan" placeholder="id Kecamatan">
        <label for="nama_kecamatan">Nama Kecamatan</label>
        <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" placeholder="Nama Kecamatan">
    </div>
    <div class="col-md-12" style="text-align: right;">
        <input type="submit" class="btn btn-success" value="Simpan Data">
    </div>
</form>


@endsection