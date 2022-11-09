@extends('master')
@section('title', 'Data Perpustakawan')

@section('content')
<div class="container mt-3">
    <h2>Data Perpustakawan</h2>
    <p><a href="/createperpustakawan">
            <button class="btn btn-success mb-2">Tambah Perpustakawan</button></a></p>

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <td>Id</td>
                <td>NIP</td>
                <td>Nama</td>
                <td>Golongan</td>
                <td>Edit</td>
                <td>Hapus</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($data_perpustakawan as $perpustakawan)
            <tr>
                <td>{{$perpustakawan->id}}</td>
                <td>{{$perpustakawan->NIP}}</td>
                <td>{{$perpustakawan->Nama}}</td>
                <td>{{$perpustakawan->Golongan}}</td>
                <td><a href="{{route('ubahperpustakawan', $perpustakawan->id)}}">
                        <button class="btn btn-primary btn-sm">Edit</button></a></td>
                <td>
                    <form action="{{route('hapusperpustakawan', $perpustakawan->id)}}" method="post">
                        <button class="btn btn-primary btn-sm" onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection