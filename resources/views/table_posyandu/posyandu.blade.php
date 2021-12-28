@extends('layout.layout')

@section('content')

    <main>
        <div class="container-fluid px-4">
            @if (session()->has('error'))
                <div class="alert alert-danger mt-2 alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <h1 class="mt-4">Table Posyandu</h1>
            <a href="{{ url('/posyandu/create') }}"><button class="btn btn-primary btn-sm" style="float: left">Input
                    data</button></a><br><br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Posyandu
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">

                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama_posyandu</th>
                                <th>alamat_posyandu</th>
                                <th>kelurahan</th>


                                <th>delete</th>
                                <th>update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $i = 1; ?>
                                @foreach ($dataposyandu as $dataposyandu)
                                    {{-- memanggil kolom table database --}}
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $dataposyandu->nama_posyandu }}</td>
                                    <td>{{ $dataposyandu->alamat_posyandu }}</td>
                                    <td>{{ $dataposyandu->kelurahan->kelurahan }}</td>
                                    <td>
                                        <form action="/posyandu/{{ $dataposyandu->id }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm border-0" type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    <td><a href="/posyandu/{{ $dataposyandu->id }}/edit"><button type="submit"
                                                class="btn btn-warning btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin mengubah/mengedit data ini?')">Update</button></a>
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
