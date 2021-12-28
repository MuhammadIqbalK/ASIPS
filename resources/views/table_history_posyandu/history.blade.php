@extends('layout.layout')

@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table History Posyandu</h1>
            <a href="{{ url('/history/create') }}"><button class="btn btn-primary btn-sm" style="float: left">Input
                    data</button></a><br><br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    posyandu
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">

                        <thead>
                            <tr>
                                <th>no</th>
                                <th>tgl_posyandu</th>
                                <th>bb_balita</th>
                                <th>tb_balita</th>
                                <th>id_balita</th>


                                @if (Gate::check('admin') || Gate::check('superadmin'))
                                    <th>delete</th>
                                    <th>update</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $i = 1; ?>
                                @foreach ($datahistory as $item)
                                    {{-- memanggil kolom table database --}}
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->tgl_posyandu }}</td>
                                    <td>{{ $item->bb_balita }}</td>
                                    <td>{{ $item->tb_balita }}</td>
                                    <td>{{ $item->id_balita }} - {{ $item->balita->nama_balita }}</td>
                                    @if (Gate::check('admin') || Gate::check('superadmin'))
                                        <td>

                                            <form action="/history/{{ $item->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm border-0" type="submit"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                            </form>
                                            {{-- <a href="{{ url('/destroyposyandu', $item->id) }}"><button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a> --}}
                                        </td>
                                        <td><a href="/history/{{ $item->id }}/edit"><button type="submit"
                                                    class="btn btn-warning btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin mengubah/mengedit data ini?')">Update</button></a>
                                        </td>
                                    @endif
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
