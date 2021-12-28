@extends('layout.layout')

@section('content')

    <br />
    <br />
    <h2 class="mb-3">Tambah Data History Posyandu</h2>
    <form action={{ url('/history') }} method="post" class="me-4">
        {{ csrf_field() }}
        <div class="form-group">
            {{-- <label for="id">id Kecamatan</label>
            <input type="text" class="form-control" id="id" name="id kecamatan" placeholder="id Kecamatan"> --}}

            <div class="form-group mb-2">
                <div class="row">
                    <div class="col-md-6">
                        <label for="tgl_posyandu">Tanggal Posyandu</label>
                        <input required type="date" class="form-control" id="tgl_posyandu" name="tgl_posyandu"
                            placeholder="Masukkan Tanggal Posyandu">
                    </div>
                    <div class="col-md-6">
                        <label for="id_balita">Balita</label>
                        <select required class="form-control" id="id_balita" name="id_balita">
                            @if ($table_balita->count())
                                <option hidden>-- Pilih Balita --</option>
                                @foreach ($table_balita as $balita)
                                    <option value="{{ $balita->id }}">{{ $balita->id }} -
                                        {{ $balita->nama_balita }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group mb-2">
                <div class="row">
                    <div class="col-md-6">
                        <label for="bb_balita">Berat Badan</label>
                        <input required type="number" min="0" class="form-control" id="bb_balita" name="bb_balita"
                            placeholder="Masukkan Berat Badan Balita">
                    </div>
                    <div class="col-md-6">
                        <label for="tb_balita">Tinggi Badan</label>
                        <input required type="number" min="0" class="form-control" id="tb_balita" name="tb_balita"
                            placeholder="Masukkan Tinggi Badan Balita">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="text-align: right;">
            <input type="submit" class="btn btn-success" value="Simpan Data">
        </div>
    </form>


@endsection
