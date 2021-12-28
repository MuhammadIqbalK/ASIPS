@extends('layout.layout')

@section('content')

    <br />
    <br />
    <h2 class="mb-3">Ubah Data User</h2>
    <div class="user-data">
        <div class="mb-2">
            <h4>NIK</h4>
            <p>{{ $user->nik ? $user->nik : '-' }}</p>
        </div>
        <div class="mb-2">
            <h4>Nama User</h4>
            <p>{{ $user->name }}</p>
        </div>
        <div class="mb-2">
            <h4>Email User</h4>
            <p>{{ $user->email }}</p>
        </div>
    </div>

    <form action={{ url('/user', $user->id) }} method="post">
        @method('patch')
        @csrf
        <div class="form-group">
            {{-- <label for="id">id Kecamatan</label>
            <input type="text" class="form-control" id="id" name="id kecamatan" placeholder="id Kecamatan"> --}}
            <div class="form-group mb-2">
                <label for="role">Ubah Role</label>
                <select required class="form-control" id="role" name="role">
                    @foreach ($role as $key => $value)
                        @if ($key == $user->role)
                            <option value="{{ $key }}" selected>{{ $key }} - {{ $value }}</option>
                        @else
                            <option value="{{ $key }}">{{ $key }} - {{ $value }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-12" style="text-align: right;">
            <input type="submit" class="btn btn-success" value="Ubah Role">
        </div>
    </form>


@endsection
