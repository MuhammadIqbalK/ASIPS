@extends('layout.layout')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Table Kelurahan</h1>
        <a href="{{ url('/inputkelurahan') }}"><button class="btn btn-primary btn-sm" style="float: left">Input data</button></a><br><br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Kelurahan
            </div>
            <div class="card-body">
                <table id="datatablesSimple">

        <thead>
            <tr>
            <th>id</th>
            <th>kelurahan</th>
            
        

            <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($c as $datakelurahan)
             {{-- memanggil kolom table database --}}
           <td>{{ $datakelurahan->id }}</td>
           <td>{{ $datakelurahan->kelurahan}}</td>
    
            <td><a href="{{ url('/destroykelurahan',$datakelurahan->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>

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

