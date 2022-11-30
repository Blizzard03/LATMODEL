@extends('master')
@section('title', 'Edit Perpustakawan')

@section('content')
<div class="container mb-3 mt-3">
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
    <h2>Edit Data Perpustakawan</h2>
    <form method="post" action="{{route('modifperpustakawan', $perpustakawan->id)}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="NIP" class="form-label">NIP :</label>
            <input type="text" class="form-control @error('NIP') is-invalid @enderror" id="NIP" name="NIP" value="{{$perpustakawan->NIP}}">
			@error('NIP')
			<div class="text-danger">{{$message}}</div>
        @enderror		
        </div>
        <div class="mb-3 mt-3">
            <label for="Nama" class="form-label">Nama :</label>
            <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" name="Nama" value="{{$perpustakawan->Nama}}">
			@error('Nama')
			<div class="text-danger">{{$message}}</div>
        @enderror		
		</div>
        <div class="mb-3 mt-3">
            <label for="Golongan" class="form-label">Golongan :</label>
            <input type="text" class="form-control @error('Golongan') is-invalid @enderror" id="Golongan" name="Golongan" value="{{$perpustakawan->Golongan}}">
			@error('Golongan')
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