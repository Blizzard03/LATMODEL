@extends('master')
@section('title', 'Data Anggota')

@section('content')
<div class="container mt-3">
    <h2>Data Anggota</h2>
    <p><a href="/createanggota">
            <button class="btn btn-success mb-2">Tambah Anggota</button></a></p>
    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <td>Id</td>
                <td>NPM</td>
                <td>Nama</td>
                <td>Gender</td>
                <td>Angkatan</td>
                <td>Jenjang</td>
                <td>Jurusan</td>
                <td>Alamat</td>
                <td>Edit</td>
                <td>Hapus</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($data_anggota as $anggota)

            @php
            $gender = $anggota->Kode_Gender;
            $jenjang = substr("$anggota->NPM",4,1);
            $jurusan = substr("$anggota->NPM",5,1);
            $angkatan = substr("$anggota->NPM",0,4);
            if ($gender == 'L')
            {$gender = 'Laki-Laki';}
            else if ($gender == 'P')
            {$gender = 'Perempuan';}
            else
            {$gender = 'Gender Tidak Ada';}

            if($jenjang == 0){
            $jenjang='Diploma III';
            } elseif($jenjang == 1){
            $jenjang='Sarjana';
            }elseif($jenjang == 2){
            $jenjang='Magister';
            }

            if($jurusan==1){
            $jurusan='Sistem Informasi';
            } elseif($jurusan==2){
            $jurusan='Sistem Komputer';
            } elseif($jurusan==3){
            $jurusan='Informatika';
            }
            @endphp
            <tr>
                <td>{{$anggota->id}}</td>
                <td>{{$anggota->NPM}}</td>
                <td>{{$anggota->Nama}}</td>
                <td>{{$gender}}</td>
                <td>{{$angkatan}}</td>
                <td>{{$jenjang}}</td>
                <td>{{$jurusan}}</td>
                <td>{{$anggota->Alamat}}</td>
                <td><a href="{{route('ubahanggota', $anggota->id)}}">
                        <button class="btn btn-primary btn-sm">Edit</button></a></td>
                <td>
                    <form action="{{route('hapusanggota', $anggota->id)}}" method="post">
                        @csrf
                        <button class="btn btn-primary btn-sm" onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection