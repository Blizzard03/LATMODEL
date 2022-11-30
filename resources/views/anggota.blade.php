@extends('master')
@section('title', 'Data Anggota')

@section('content')
<div class="container mt-3">
    <h2>{{ __('tablemember.title')}}</h2>
    <div class="container mt-3">
	@if(Session::has('pesan'))
	<div class="alert alert-danger">
		{{Session::get('pesan')}}
	</div>
	@endif
    <p><a href="/createanggota">
            <button class="btn btn-success mb-2">{{ __('tablemember.display.tombol1')}}</button></a></p>
    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <td>{{ __('tablemember.display.Id')}}</td>
                <td>{{ __('tablemember.display.NPM')}}</td>
                <td>{{ __('tablemember.display.Nama')}}</td>
                <td>{{ __('tablemember.display.Gender')}}</td>
                <td>{{ __('tablemember.display.Angkatan')}}</td>
                <td>{{ __('tablemember.display.Jenjang')}}</td>
                <td>{{ __('tablemember.display.Jurusan')}}</td>
                <td>{{ __('tablemember.display.Alamat')}}</td>
                <td>{{ __('tablemember.display.edit')}}</td>
                <td>{{ __('tablemember.display.hapus')}}</td>
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
            {$gender = __('tablemember.display.pilihan_Kode_Gender.Laki-Laki');}
            else if ($gender == 'P')
            {$gender = __('tablemember.display.pilihan_Kode_Gender.Perempuan');}
            else
            {$gender = 'Gender Tidak Ada';}

            if($jenjang == 0){
            $jenjang=__('tablemember.display.pilihan_kode_jenjang.D3');
            } elseif($jenjang == 1){
            $jenjang=__('tablemember.display.pilihan_kode_jenjang.S');
            }elseif($jenjang == 2){
            $jenjang=__('tablemember.display.pilihan_kode_jenjang.M');
            }

            if($jurusan==1){
            $jurusan=__('tablemember.display.pilihan_kode_jurusan.SI');
            } elseif($jurusan==2){
            $jurusan=__('tablemember.display.pilihan_kode_jurusan.SK');
            } elseif($jurusan==3){
            $jurusan=__('tablemember.display.pilihan_kode_jurusan.IT');
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
                        <button class="btn btn-primary btn-sm">{{ __('tablemember.display.tombol2')}}</button></a></td>
                <td>
                    <form action="{{route('hapusanggota', $anggota->id)}}" method="post">
                        @csrf
                        <button class="btn btn-primary btn-sm" onClick="return confirm('{{__('tablemember.confirmation')}}')">{{ __('tablemember.display.tombol3')}}</button>
                    </form>
                </td>
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>
    	<!--Change Language-->
		<a href="/anggota/en">English</a>
		<a href="/anggota">Indonesia</a>
        </div>
    @endsection