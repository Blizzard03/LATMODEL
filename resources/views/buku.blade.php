@extends('master') 
@section('title', 'Data Buku') 

@section('content')
<div class="container mt-3">
  <h2>Data Buku</h2>  
  <p><a href="/createbuku">
  <button class="btn btn-success mb-2">Tambah Buku</button></a></p>  

  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr>
        <td>Id</td>
        <td>Judul</td>
	    <td>Penulis</td>
		<td>Penerbit</td>
		<td>Kategori</td>		
		<td>Harga Buku</td>
		<td>Edit</td>
		<td>Hapus</td>
	  </tr>
	</thead> 

    <tbody>
	@foreach ($data_buku as $buku)
      <tr>
	    <td>{{$buku->id}}</td>
        <td>{{$buku->Judul}}</td>
		<td>{{$buku->Penulis}}</td>	
		<td>{{$buku->Penerbit}}</td>
		@php
		   if ($buku->Kode_Kategori == 'F')
		      {$kategori = 'Fiksi';}
           else if ($buku->Kode_Kategori == 'S')
		      {$kategori = 'Sains';}
           else 
		      {$kategori = 'Data Tidak Ada';}
        @endphp      			  
		<td>{{$kategori}}</td>	
		<td>{{$buku->hargabuku}}</td>	
        <td><a href="{{route('ubahbuku', $buku->id)}}">
			<button class="btn btn-primary btn-sm">Edit</button></a></td>
		<td><form action="{{route('hapusbuku', $buku->id)}}" method="post">
		       @csrf
			   <button class="btn btn-primary btn-sm" 
			           onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
			</form></td>  		
      </tr>
	@endforeach  
	</tbody>
  </table>
</div>  
@endsection
