@extends('master') 
@section('title', 'Data Anggota') 

@section('content')
<div class="container mt-3">
  <h2>Data Anggota</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr>
        <td>Id</td>
        <td>NPM</td>
	    <td>Nama</td>
		<td>Gender</td>
		<td>Angkatan</td>		
		<td>Jenjang</td>
		<td>Jurusan</td>
		<td>Alamat</td>
		</tr>
	</thead> 

    <tbody>
	@foreach ($data_anggota as $anggota)
      <tr>
	    <td>{{$anggota->id}}</td>
        <td>{{$anggota->NPM}}</td>
		<td>{{$anggota->Nama}}</td>	
		<td>{{$anggota->Kode Gender}}</td>
		@php
		   if ($anggota->Kode Gender == 'L')
		      {$Kode Gender = 'Laki-Laki';}
           else if ($anggota->Kode Gender == 'P')
		      {$Kode Gender = 'Perempuan';}
           else 
		      {$Kode Gender = 'Gender Tidak Ada';}
        @endphp      			  
		<td>{{$anggota->alamat}}</td>		
      </tr>
	@endforeach  
	</tbody>
  </table>
@endsection
