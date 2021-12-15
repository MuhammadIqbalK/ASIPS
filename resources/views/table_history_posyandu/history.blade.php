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
            <th>tgl_posyandu</th>
            <th>bb_balita</th>
            <th>tb_balita</th>
            <th>id_balita</th>
        

            <th>delete</th>
            <th>update</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($datahistory as $item)
             {{-- memanggil kolom table database --}}
           <td>{{ $item->id }}</td>
           <td>{{ $item->tgl_posyandu}}</td>
           <td>{{ $item->bb_balita}}</td>
           <td>{{ $item->tb_balita}}</td>
           <td>{{ $item->id_balita}}</td>
            <td><a href="{{ url('/destroyposyandu',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
                <td><a href="{{ url('/posyanduedit',$item->id) }}"><button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda yakin ingin mengubah/mengedit data ini?')">Update</button></a>
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

