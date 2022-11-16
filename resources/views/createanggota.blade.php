@extends('master')
@section('title', 'Tambah Anggota')

@section('content')
{{--@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul class="mb-0">
			@foreach($errors->all() as $err)
			<li>{{$err}}</li>
			@endforeach
		</ul>
	</div>
	@endif--}}
<div class="container mb-3 mt-3">
    <h2>Tambah Data Buku</h2>
    <form method="post" action="/saveanggota">
        @csrf
        <div class="mb-3 mt-3">
            <label for="NPM" class="form-label"> NPM :</label>
            <input type="text" class="form-control @error('NPM') is-invalid @enderror" id="NPM" name="NPM" value="{{old('NPM')}}">
            @error('NPM')
		<div class="text-danger">{{$message}}</div>
		@enderror		
        </div>
        <div class="mb-3 mt-3">
            <label for="Nama_Anggota" class="form-label">Nama Anggota :</label>
            <input type="text" class="form-control @error('Nama_Anggota') is-invalid @enderror" id="Nama_Anggota" name="Nama_Anggota" value="{{old('Nama_Anggota')}}">
            @error('Nama_Anggota')
		<div class="text-danger">{{$message}}</div>
		@enderror		
        </div>
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">Kode Gender :</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="Kode_Gender" value="Laki-Laki" checked>
                <label class="form-check-label" for="radio1">Laki-Laki</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="Kode_Gender" value="Perempuan">
                <label class="form-check-label" for="radio2">Perempuan</label>
            </div>
        </div>

        <div class="mb-3 mt-3">
            <label for="Alamat" class="form-label">Alamat :</label>
            <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" name="Alamat" value="{{old('Nama_Anggota')}}">
            @error('Alamat')
		<div class="text-danger">{{$message}}</div>
		@enderror		
        </div>

        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">Simpan</button>
            <button class="btn btn-success mb-2" type="reset">Batal</button>
        </div>
    </form>
</div>
@endsection