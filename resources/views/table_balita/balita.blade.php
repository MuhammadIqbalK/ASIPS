@extends('layout.layout')

@section('content')

    <main>
        <div class="container-fluid px-4">
            @if (session()->has('error'))
                <div class="alert alert-danger mt-2 alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <h1 class="mt-4">Table Balita</h1>
            <a href="{{ url('/balita/create') }}"><button class="btn btn-primary btn-sm" style="float: left">Input
                    data</button></a><br><br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Balita
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">

                        <thead>
                            <tr>
                                <th>no</th>
                                <th>foto_balita</th>
                                <th>nama_balita</th>
                                <th>nik_ortu</th>
                                <th>nama_ortu</th>
                                <th>tgllahir_balita</th>
                                <th>jk_balita</th>
                                <th>status</th>
                                <th>nama_posyandu</th>
                                <th>delete</th>
                                <th>update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $i = 1; ?>
                                @foreach ($a as $databalita)
                                    {{-- memanggil kolom table database --}}
                                    <td>{{ $i++ }}</td>
                                    <td>
                                       @if ($databalita->foto_balita)
                                            <div style="width: 350px">
                                                <img src="{{ URL::to('/') }}/pwbf12/public/img/{{ $databalita->foto_balita }}" alt=""
                                                    srcset="" style="width: 100%">
                                            </div>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $databalita->nama_balita }}</td>
                                    <td>{{ $databalita->nik_ortu }}</td>
                                    <td>{{ $databalita->nama_ortu }}</td>
                                    <td>{{ $databalita->tgllahir_balita }}</td>
                                    <td>{{ $databalita->jk_balita }}</td>
                                    <td>{{ $databalita->status }}</td>
                                    {{-- <td>{{ $databalita->created_at }}</td>
           <td>{{ $databalita->updated_at}}</td> --}}
                                    <td>{{ $databalita->posyandu->nama_posyandu }}</td>
                                    <td>
                                        <form action="/balita/{{ $databalita->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm border-0" type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                        {{-- <a href="{{ url('/destroybalita', $databalita->id) }}"><button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a> --}}
                                    </td>
                                    <td>
                                        <a href="/balita/{{ $databalita->id }}/edit"><button type="submit"
                                                class="btn btn-warning btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin mengubah/mengedit data ini?')">Update</button></a>
                                    </td>
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
