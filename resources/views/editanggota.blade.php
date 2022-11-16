@extends('master')
@section('title', 'Edit Anggota')

@section('content')
<div class="container mb-3 mt-3">
    <h2>Edit Data Anggota</h2>
    <form method="post" action="{{route('modifanggota', $Anggota->id)}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="NPM" class="form-label">NPM :</label>
            <input type="text" class="form-control @error('NPM') is-invalid @enderror" id="NPM" name="judul" value="{{$Anggota->NPM}}">
            @error('NPM')
			<div class="text-danger">{{$message}}</div>
        @enderror		
        </div>
        <div class="mb-3 mt-3">
            <label for="Nama_Anggota" class="form-label">Nama Anggota :</label>
            <input type="text" class="form-control  @error('Nama_Anggota') is-invalid @enderror" id="Nama_Anggota" name="Nama_Anggota" value="{{$Anggota->Nama}}">
            @error('Nama_Anggota')
			<div class="text-danger">{{$message}}</div>
        @enderror	
        </div>
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">Kode Gender :</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="Kode_Gender" value="L" @php if($Anggota->Kode_Gender == 'L'){print('checked');} @endphp>
                <label class="form-check-label" for="radio1">Laki-Laki</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="Kode_Gender" value="P" @php if($Anggota->Kode_Gender == 'P'){print('checked');} @endphp>
                <label class="form-check-label" for="radio2">Perempuan</label>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="Alamat" class="form-label">Alamat:</label>
            <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" name="Alamat" value="{{$Anggota->Alamat}}">
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