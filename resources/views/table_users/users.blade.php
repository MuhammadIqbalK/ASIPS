@extends('layout.layout')

@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table Users</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Users
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">

                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama_user</th>
                                <th>nik</th>
                                <th>email</th>
                                <th>role</th>

                                <th>update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $i = 1; ?>
                                @foreach ($datausers as $user)
                                    {{-- memanggil kolom table database --}}
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->nik ? $user->nik : '-' }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role ? $user->role : '-' }}</td>
                                    <td><a href="/user/{{ $user->id }}/edit"><button type="submit"
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
