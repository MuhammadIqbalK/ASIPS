@extends('layout.layout')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Table balita</h1>
        <a href="{{ url('/input_data_balita') }}"><button class="btn btn-primary btn-sm" style="float: left">Input data</button></a><br><br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Balita
            </div>
            <div class="card-body">
                <table id="datatablesSimple">

        <thead>
            <tr>
            <th>id</th>
            <th>nama_balita</th>
            <th>nik_ortu</th>
            <th>nama_ortu</th>
            <th>tgllahir_balita</th>
            <th>jk_balita</th>
            <th>status</th>
            <th>id_posyandu</th>
        

            <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($a as $databalita)
             {{-- memanggil kolom table database --}}
           <td>{{ $databalita->id }}</td>
           <td>{{ $databalita->nama_balita}}</td>
           <td>{{ $databalita->nik_ortu}}</td>
           <td>{{ $databalita->nama_ortu}}</td>
           <td>{{ $databalita->tgllahir_balita}}</td>
           <td>{{ $databalita->jk_balita }}</td>
           <td>{{ $databalita->status }}</td>
           {{-- <td>{{ $databalita->created_at }}</td>
           <td>{{ $databalita->updated_at}}</td> --}}
           <td>{{ $databalita->id_posyandu }}</td>
            <td><a href="{{ url('/destroybalita',$databalita->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>

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

