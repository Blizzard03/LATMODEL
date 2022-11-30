@extends('master')
@section('title', 'Data Buku')

@section('content')
<div class="container mt-3">
	@if(Session::has('pesan'))
	<div class="alert alert-danger">
		{{Session::get('pesan')}}
	</div>
	@endif
	<div class="container mt-3">
		<h2>{{ __('tablebuku.title')}}</h2>
		<p><a href="/createbuku">
				<button class="btn btn-success mb-2">{{ __('tablebuku.display.tombol1')}}</button></a></p>

		<table class="table table-bordered table-striped">
			<thead class="table-success">
				<tr>
					<td>{{ __('tablebuku.display.Id')}}</td>
					<td>{{ __('tablebuku.display.judul')}}</td>
					<td>{{ __('tablebuku.display.penulis')}}</td>
					<td>{{ __('tablebuku.display.penerbit')}}</td>
					<td>{{ __('tablebuku.display.kategori')}}</td>
					<td>{{ __('tablebuku.display.harga')}}</td>
					<td>{{ __('tablebuku.display.edit')}}</td>
					<td>{{ __('tablebuku.display.hapus')}}</td>
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
					{$kategori = __('tablebuku.display.pilihan_kategori.fiksi');}
					else if ($buku->Kode_Kategori == 'S')
					{$kategori = __('tablebuku.display.pilihan_kategori.sains');}
					else
					{$kategori = 'Data Tidak Ada';}
					@endphp
					<td>{{$kategori}}</td>
					<td style="text-align:center">
						{{"Rp"." " .number_format($buku->hargabuku,2,',','.');}}
					</td>
					<td><a href="{{route('ubahbuku', $buku->id)}}">
							<button class="btn btn-primary btn-sm">{{ __('tablebuku.display.tombol2')}}</button></a></td>
					<td>
						<form action="{{route('hapusbuku', $buku->id)}}" method="post">
							@csrf
							<button class="btn btn-primary btn-sm" onClick="return confirm('{{__('tablebuku.confirmation')}}')">{{ __('tablebuku.display.tombol3')}}</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<!--Change Language-->
		<a href="/buku/en">English</a>
		<a href="/buku">Indonesia</a>

	</div>
	@endsection