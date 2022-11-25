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
    <h2>{{ __('form2.title') }}</h2>
    <form method="post" action="/saveanggota">
        @csrf
        <div class="mb-3 mt-3">
            <label for="NPM" class="form-label"> {{__('form2.input.NPM')}} :</label>
            <input type="text" class="form-control @error('NPM') is-invalid @enderror" id="NPM" name="NPM" value="{{old('NPM')}}">
            @error('NPM')
		<div class="text-danger">{{$message}}</div>
		@enderror		
        </div>
        <div class="mb-3 mt-3">
            <label for="Nama_Anggota" class="form-label">{{__('form2.input.Nama_Anggota')}}</label>
            <input type="text" class="form-control @error('Nama_Anggota') is-invalid @enderror" id="Nama_Anggota" name="Nama_Anggota" value="{{old('Nama_Anggota')}}">
            @error('Nama_Anggota')
		<div class="text-danger">{{$message}}</div>
		@enderror		
        </div>
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">{{__('form2.input.Kode_Gender')}}</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="Kode_Gender" value="Laki-Laki" checked>
                <label class="form-check-label" for="radio1">{{__('form2.input.pilihan_Kode_Gender.Laki-Laki')}}</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="Kode_Gender" value="Perempuan">
                <label class="form-check-label" for="radio2">{{__('form2.input.pilihan_Kode_Gender.Perempuan')}}</label>
            </div>
        </div>

        <div class="mb-3 mt-3">
            <label for="Alamat" class="form-label">{{__('form2.input.Alamat')}}</label>
            <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" name="Alamat" value="{{old('Nama_Anggota')}}">
            @error('Alamat')
		<div class="text-danger">{{$message}}</div>
		@enderror		
        </div>

        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">{{__('form2.input.tombol1')}}</button>
            <button class="btn btn-success mb-2" type="reset">{{__('form2.input.tombol2')}}</button>
        </div>
    </form>
    
  <a href="/createanggota/en">English</a>
  <a href="/createanggota">Indonesia</a> 
</div>
@endsection