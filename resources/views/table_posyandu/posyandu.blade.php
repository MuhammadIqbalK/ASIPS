@extends('layout.layout')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Table posyandu</h1>
        <a href="{{ url('/input_data_balita') }}"><button class="btn btn-primary btn-sm" style="float: left">Input data</button></a><br><br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
               posyandu
            </div>
            <div class="card-body">
                <table id="datatablesSimple">

        <thead>
            <tr>
            <th>id</th>
            <th>nama_posyandu</th>
            <th>alamat_posyandu</th>
            <th>id_kelurahan</th>
        

            <th>delete</th>
            <th>update</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($dataposyandu as $dataposyandu)
             {{-- memanggil kolom table database --}}
           <td>{{ $dataposyandu->id }}</td>
           <td>{{ $dataposyandu->nama_posyandu}}</td>
           <td>{{ $dataposyandu->alamat_posyandu}}</td>
           <td>{{ $dataposyandu->id_kelurahan }}</td>
            <td><a href="{{ url('/destroyposyandu',$dataposyandu->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
                <td><a href="{{ url('/posyanduedit',$dataposyandu->id) }}"><button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda yakin ingin mengubah/mengedit data ini?')">Update</button></a>
            </tr>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>
</div>
</div>
    
</main>
    
@endsection

