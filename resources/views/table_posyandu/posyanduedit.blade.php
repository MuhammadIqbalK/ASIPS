@extends('layout.layout')

@section('content')

    <br />
    <br />
    <h2 class="mb-3">Ubah Data Posyandu</h2>
    <form action={{ url('/posyandu', $dataposyandu->id) }} method="post">
        @method('patch')
        @csrf
        <div class="form-group">
            {{-- <label for="id">id Kecamatan</label>
            <input type="text" class="form-control" id="id" name="id kecamatan" placeholder="id Kecamatan"> --}}
            <div class="form-group mb-2">
                <label for="nama_posyandu">Nama Posyandu</label>
                <input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu"
                    placeholder="Masukkan Nama Posyandu" value="{{ $dataposyandu->nama_posyandu }}">
            </div>
            <div class="form-group mb-2">
                <label for="alamat_posyandu">Alamat Posyandu</label>
                <input type="text" class="form-control" id="alamat_posyandu" name="alamat_posyandu"
                    placeholder="Masukkan Alamat Posyandu" value="{{ $dataposyandu->alamat_posyandu }}">
            </div>
            <div class="form-group mb-4">
                <label for="id">Pilih Kelurahan</label>
                <select class="form-control" id="id_kelurahan" name="id_kelurahan">
                    @if ($table_kelurahan->count())
                        @foreach ($table_kelurahan as $kelurahan)
                            @if ($kelurahan->id == $dataposyandu->id_kelurahan)
                                <option value="{{ $kelurahan->id }}" selected>{{ $kelurahan->kelurahan }}</option>
                            @else
                                <option value="{{ $kelurahan->id }}">{{ $kelurahan->kelurahan }}</option>
                            @endif

                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-md-12" style="text-align: right;">
            <input type="submit" class="btn btn-success" value="Perbarui Data">
        </div>
    </form>


@endsection
