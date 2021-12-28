@extends('layout.layout')

@section('content')

    <br />
    <br />
    <h2 class="mb-3">Tambah Data Balita</h2>
    <form action={{ url('/balita', $databalita->id) }} method="post" class="me-4" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
            {{-- <label for="id">id Kecamatan</label>
            <input type="text" class="form-control" id="id" name="id kecamatan" placeholder="id Kecamatan"> --}}
            {{-- Data Balita --}}
            <div class="mb-3">
                <h4>Data Balita</h4>
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nama_balita">Nama Balita</label>
                            <input required type="text" class="form-control" id="nama_balita" name="nama_balita"
                                placeholder="Masukkan Nama Balita"
                                value="{{ old('nama_balita', $databalita->nama_balita) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="tgllahir_balita">Tanggal Lahir Balita</label>
                            <input required type="date" class="form-control" id="tgllahir_balita" name="tgllahir_balita"
                                placeholder="Masukkan Tanggal Lahir Balita"
                                value="{{ old('tgllahir_balita', $databalita->tgllahir_balita) }}">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="jk_balita">Jenis Kelamin</label>
                            <select required class="form-control" id="jk_balita" name="jk_balita">
                                <option hidden>-- Pilih Jenis Kelamin --</option>
                                @foreach ($jeniskelamin as $key => $value)
                                    @if ($key == $databalita->jk_balita)
                                        <option value="{{ $key }}" selected>{{ $value }}</option>
                                    @else
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="status">Status</label>
                            <select required class="form-control" id="status" name="status">
                                <option hidden>-- Pilih Status --</option>
                                @foreach ($status as $key => $value)
                                    @if ($key == $databalita->status)
                                        <option value="{{ $key }}" selected>{{ $value }}</option>
                                    @else
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="foto_balita">Foto Balita</label>
                    <input type="hidden" name="oldImage" value="{{ $databalita->foto_balita }}">
                    <input class="form-control @error('foto_balita') is-invalid @enderror" type="file" id="foto_balita"
                        name="foto_balita" onchange="previewImage()">
                    @error('foto_balita')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if ($databalita->foto_balita)
                        <img src="{{ asset('storage/' . $databalita->foto_balita) }}"
                            class="img-preview img-fluid d-block mt-2 col-sm-6">
                    @else
                        <img class="img-preview img-fluid mt-2 col-sm-6">
                    @endif
                </div>
            </div>

            <div class="mb-3">
                <h4>Data Orang Tua</h4>
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nik_ortu">NIK Orang Tua</label>
                            <input required type="number" class="form-control" id="nik_ortu" name="nik_ortu"
                                placeholder="Masukkan NIK Orang Tua"
                                value="{{ old('nik_ortu', $databalita->nik_ortu) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="nama_ortu">Nama Orang Tua</label>
                            <input required type="text" class="form-control" id="nama_ortu" name="nama_ortu"
                                placeholder="Masukkan Nama Orang Tua"
                                value="{{ old('nama_ortu', $databalita->nama_ortu) }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="id">
                    <h4>Pilih Posyandu</h4>
                </label>
                <select required class="form-control" id="id_posyandu" name="id_posyandu">
                    @if ($table_posyandu->count())
                        @foreach ($table_posyandu as $posyandu)
                            @if (old('id_posyandu'))
                                @if ($posyandu->id == old('id_posyandu', $databalita->id_posyandu))
                                    <option value="{{ $posyandu->id }}" selected>{{ $posyandu->nama_posyandu }}
                                    </option>
                                @endif
                            @endif
                            <option value="{{ $posyandu->id }}">{{ $posyandu->nama_posyandu }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-md-12" style="text-align: right;">
            <input type="submit" class="btn btn-success" value="Ubah Data">
        </div>
    </form>

    <script>
        function previewImage() {
            const image = document.querySelector('#foto_balita');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

@endsection
