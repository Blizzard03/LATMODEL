@extends('master') 
@section('title', 'Tambah Perpustakaan') 

@section('content')
@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul class="mb-0">
			@foreach($errors->all() as $err)
			<li>{{$err}}</li>
			@endforeach
		</ul>
	</div>
	@endif
<div class="container mb-3 mt-3">
  <h2>Tambah Data Perpustakawan</h2>  
  <form method="post" action="/saveperpustakawan">
     @csrf
	  <div class="mb-3 mt-3">
		<label for="NIP" class="form-label">NIP :</label>
		<input type="text" class="form-control" id="NIP" name="NIP">
	  </div>  
	  <div class="mb-3 mt-3">
		<label for="Nama" class="form-label">Nama :</label>
		<input type="text" class="form-control" id="Nama" name="Nama">
	  </div>  
	  <div class="mb-3 mt-3">
		<label for="Golongan" class="form-label">Golongan :</label>
		<input type="text" class="form-control" id="Golongan" name="Golongan">
	  </div> 
      <div class="mb-3 mt-3">
	    <button class="btn btn-success mb-2" type="submit">Simpan</button>
        <button class="btn btn-success mb-2" type="reset">Batal</button>
      </div>
  </form>
</div>
@endsection

