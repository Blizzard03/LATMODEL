@extends('master')
@section('title', 'Laporan Denda')

@section('content')
<div class="container mt-3">
  <h2>{{ __('Fines_Report.title')}}</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr>
        <th>{{ __('Fines_Report.table_data.Id_Peminjaman')}}</th>
        <th>{{ __('Fines_Report.table_data.Nama_')}}</th>
        <th>{{ __('Fines_Report.table_data.Alamat')}}</th>
        <th>{{ __('Fines_Report.table_data.Judul_Buku')}}</th>
        <th>{{ __('Fines_Report.table_data.Penulis')}}</th>
        <th>{{ __('Fines_Report.table_data.Lama_Pinjam')}}</th>
        <th>{{ __('Fines_Report.table_data.Keterlambatan')}}</th>
        <th>{{ __('Fines_Report.table_data.Denda')}}</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data_denda as $report2)
      @php
      $telat = $report2->Lama_Pinjam - 3;

      if ($telat > 0) {
      $telat;
      } else {
      $telat = 0;
      }
      $denda = $telat * 1000;
@endphp

      <tr>
        <td style="text-align:center">{{$report2->IDPeminjam}}</td>
        <td>{{$report2->Nama_Anggota}}</td>
        <td>{{$report2->Alamat_Anggota}}</td>
        <td>{{$report2->Judul_Buku}}</td>
        <td>{{$report2->Penulis}}</td>
        <td style="text-align:center">{{$report2->Lama_Pinjam}}</td>

        <td style="text-align:center">{{$report2->Keterlabatan}}</td>

        <<td style="text-align:center">{{$denda}}</td> 
      </tr>

      @endforeach
    </tbody>
  </table>

  <!--Change Language-->
  <a href="/lap2/en">English</a>
  <a href="/lap2">Indonesia</a>
</div>
@endsection