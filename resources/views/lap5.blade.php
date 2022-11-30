@extends('master')
@section('title', 'Rekaputasi Rata-Rata Harga Buku Tiap Penerbit')

@section('content')
<div class="container mt-3">
    <h2>Rekaputasi Rata-Rata Harga Buku Tiap Penerbit</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th style="text-align:center">Penerbit</th>
                <th style="text-align:center">Harga Buku Rata-rata</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($data_rekap_harga_buku as $report5)
            <tr>
                <td style="text-align:center">{{$report5->Penerbit_Buku}}</td>
                <td style="text-align:center">{{"Rp"." " .number_format($report5->Jumlah_Harga_Buku, 2,',','.');}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
