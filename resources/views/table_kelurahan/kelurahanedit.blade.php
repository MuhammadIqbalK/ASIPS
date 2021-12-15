@extends('layout.layout')

@section('content')


{{-- 
<form action={{ url('/kelurahanupdate',$table_kelurahan->id) }} method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="id_kelurahan">Nama Kecamatan</label>
        <select class="form-control" id="id" name="id">
            @if($table_kecamatan->count())
                @foreach($table_kecamatan as $v)
                    <option value="{{ $v->id }}" {{ $table_kelurahan->id == $v->id ? 'selected="selected"' : '' }}>{{ $v->id }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="nama_kelurahan">Nama Kelurahan</label>
        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Nama Kelurahan" value="{{ $table_kelurahan->kelurahan }}">
    </div>
    <div class="col-md-12" style="text-align: right;">
        <input type="submit" class="btn btn-success" value="Simpan Data">
    </div>
</form> --}}

                <h2 class="form-title">Edit Kelurahan</h2>
                <form method="POST" form action={{ url('/kelurahanupdate',$table_kelurahan->id) }}>
                   
                    @csrf
                    <div class="form-group">
                        <label for="id">Id Kelurahan</label>
                        <input name="id" value="{{ $table_kelurahan->id }}">
                    </div>
                    {{-- <div class="form-group">
                        <select name="ID_KECAMATAN" class="form-control text-center">
                            @foreach ($table_kecamatan as $item)
                                <option value="{{ $item->id }}">{{ $item->table_kecamatan }}</option>
                            @endforeach
                        </select> --}}
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user text-center" id="kelurahan"
                            placeholder="Nama Kelurahan" name="kelurahan" value="{{ $table_kelurahan->table_kelurahan }}">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <a href="/kelurahan" class="btn btn-danger btn-user btn-block">
                                Batal
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div>


@endsection