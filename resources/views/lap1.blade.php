@extends('master') 
@section('title', 'Laporan Peminjaman') 

@section('content')
<div class="container mt-3">
  <h2>{{ __('Loans_Report.title')}}</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr>
        <th>{{ __('Loans_Report.table_data.Id_Peminjaman')}}</th>
	    <th>{{ __('Loans_Report.table_data.Nama_')}}</th>
		<th>{{ __('Loans_Report.table_data.Judul_Buku')}}</th>
		<th>{{ __('Loans_Report.table_data.Lama_Pinjam')}}</th>		
	  </tr>
	</thead> 

    <tbody>
	@foreach ($data_peminjaman as $report1)
      <tr>
	    <td style="text-align:center">{{$report1->IdPinjam}}</td>
        <td>{{$report1->NamaAgt}}</td>		
		<td>{{$report1->JudulBuku}}</td> 		  
		<td style="text-align:center">{{$report1->LamaPinjam}}</td>	
      </tr>
	@endforeach  
	</tbody>
  </table>	

  <!--Change Language-->
  <a href="/lap1/en">English</a>
		<a href="/lap1">Indonesia</a>
</div>
@endsection