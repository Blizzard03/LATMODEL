@extends('master')
@section('title', 'Rekapitulasi Junmlah Buku Tiap Penulis')

@section('content')
<div class="container mt-3">
    <h2>Rekapitulasi Jumlah Buku Tiap Penulis</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th style="text-align:center">Penulis</th>
                <th style="text-align:center">Jumlah Buku Yang Ditulis</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($data_rekap_penulis as $report6)
            <tr>
                <td style="text-align:center">{{$report6->Penulis_Buku}}</td>
                <td style="text-align:center">{{$report6->Jumlah_Buku}}</td>
                
               
            </tr>

            @endforeach
        </tbody>
    </table>

   
</div>
@endsection