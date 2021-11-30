@extends('layout.layout')

@section('content')



		
<br/>
<br/>


<form action={{ url('/kelurahancreate') }} method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="id">id kecamatan</label>
        <select class="form-control" id="id_kecamatan" name="id_kecamatan">
            @if($table_kecamatan->count())
                @foreach($table_kecamatan as $v)
                    <option value="{{ $v->id }}">{{ $v->id }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="nama_kelurahan">Nama Kelurahan</label>
        <input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan" placeholder="Nama Kelurahan">
    </div>
    <div class="col-md-12" style="text-align: right;">
        <input type="submit" class="btn btn-success" value="Simpan Data">
    </div>
</form>
@endsection