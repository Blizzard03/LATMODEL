@extends('master') 
@section('title', 'Data Buku') 

@section('content')
<div class="container mt-3">
  <h2>Data Buku</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr>
        <td>Id</td>
        <td>Judul</td>
	    <td>Penulis</td>
		<td>Penerbit</td>
		<td>Kategori</td>		
		<td>Harga Buku</td>
		</tr>
	</thead> 

    <tbody>
	@foreach ($data_buku as $buku)
      <tr>
	    <td>{{$buku->id}}</td>
        <td>{{$buku->judul}}</td>
		<td>{{$buku->penulis}}</td>	
		<td>{{$buku->penerbit}}</td>
		@php
		   if ($buku->kodekategori == 'F')
		      {$kategori = 'Fiksi';}
           else if ($buku->kodekategori == 'S')
		      {$kategori = 'Sains';}
           else 
		      {$kategori = 'Data ngaco';}
        @endphp      			  
		<td>{{$kategori}}</td>	
		<td>{{$buku->hargabuku}}</td>		
      </tr>
	@endforeach  
	</tbody>
  </table>
@endsection

