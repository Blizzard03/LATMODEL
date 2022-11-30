@extends('master')
@section('title', 'Laporan Denda')

@section('content')
<div class="container mt-3">
    <h2>Rekap Per Judul</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>Judul_Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Berapa Kali Dipinjam</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($data_rekap_buku as $report3)
            <tr>
                <td style="text-align:center">{{$report3->Judul_Buku}}</td>
                <td style="text-align:center">{{$report3->Penulis_Buku}}</td>
                <td style="text-align:center">{{$report3->Penerbit_Buku}}</td>
                <td style="text-align:center">{{$report3->Jumlah_Pinjam}}</td>
                
               
            </tr>

            @endforeach
        </tbody>
    </table>

   
</div>
@endsection