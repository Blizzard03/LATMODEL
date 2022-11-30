@extends('master')
@section('title', 'Rekapitulasi Perpinjaman Per Anggota')

@section('content')
<div class="container mt-3">
    <h2>Rekapitulasi Perpinjaman Per Anggota</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>NPM</th>
                <th>Nama Anggota</th>
                <th>Alamat</th>
                <th>Berapa Kali Meminjam</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($data_rekap_anggota as $report4)
            <tr>
                <td style="text-align:center">{{$report4->nomor_id}}</td>
                <td style="text-align:center">{{$report4->Nama_Anggota}}</td>
                <td style="text-align:center">{{$report4->Alamat_Anggota}}</td>
                <td style="text-align:center">{{$report4->Jumlah_Meminjam}}</td>
                
               
            </tr>

            @endforeach
        </tbody>
    </table>

   
</div>
@endsection