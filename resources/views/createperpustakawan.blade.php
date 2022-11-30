@extends('master') 
@section('title', 'Tambah Perpustakaan') 

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
  <h2>{{ __('form3.title') }}</h2>  
  <form method="post" action="/saveperpustakawan">
     @csrf
	  <div class="mb-3 mt-3">
		<label for="NIP" class="form-label">{{__('form3.input.NIP')}}</label>
		<input type="text" class="form-control @error('NIP') is-invalid @enderror" id="NIP" name="NIP" value="{{old('NIP')}}">
		@error('NIP')
		<div class="text-danger">{{$message}}</div>
		@enderror		
	  </div>  
	  <div class="mb-3 mt-3">
		<label for="Nama" class="form-label">{{__('form3.input.Nama')}}</label>
		<input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" name="Nama" value="{{old('Nama')}}">
	@error('Nama')
	@enderror
	</div>  
	  <div class="mb-3 mt-3">
		<label for="Golongan" class="form-label">{{__('form3.input.Golongan')}}</label>
		<input type="text" class="form-control @error('Golongan') is-invalid @enderror" id="Golongan" name="Golongan" value="{{old('Golongan')}}">
		@error('Golongan')
		@enderror
	  </div> 
      <div class="mb-3 mt-3">
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">{{__('form3.input.tombol1')}}</button>
            <button class="btn btn-success mb-2" type="reset">{{__('form3.input.tombol2')}}</button>
        </div>
      </div>
  </form>

  
  <a href="/createperpustakawan/en">English</a>
  <a href="/createperpustakawan">Indonesia</a> 
</div>
@endsection

