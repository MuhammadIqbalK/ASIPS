@extends('layout.layout')

@section('content')


	<h1 class="mt-2 mb-4">Edit kecamatan</h1>
    <form action={{ url('/kecamatanupdate',$table_kecamatan->id) }} method="post">
		@csrf
			<div class="content">
				<div class="row mb-3">
				<input type="hidden" class="form-control" name='id' value="{{ $table_kecamatan->id }}"/>
					<label for="kecamatan" class="col-sm-2 col-form-label ">Nama kecamatan</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $table_kecamatan->kecamatan }}" value="{{ $table_kecamatan->kecamatan }}" class="form-control" id="kecamatan" name='kecamatan'>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class="btn btn-primary" value = "Simpan"/>
	</form>


   


@endsection

