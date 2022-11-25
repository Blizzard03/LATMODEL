@extends('master')
@section('title', 'Data Perpustakawan')

@section('content')
<div class="container mt-3">
    <h2>{{ __('tableperpustakawan.title')}}</h2>
    <p><a href="/createperpustakawan">
            <button class="btn btn-success mb-2">{{ __('tableperpustakawan.display.tombol1')}}</button></a></p>

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <td>{{ __('tableperpustakawan.display.Id')}}</td>
                <td>{{ __('tableperpustakawan.display.NIP')}}</td>
                <td>{{ __('tableperpustakawan.display.Nama')}}</td>
                <td>{{ __('tableperpustakawan.display.Golongan')}}</td>
                <td>{{ __('tableperpustakawan.display.edit')}}</td>
                <td>{{ __('tableperpustakawan.display.hapus')}}</td>
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
                        <button class="btn btn-primary btn-sm">{{ __('tableperpustakawan.display.tombol2')}}</button></a></td>
                <td>
                    <form action="{{route('hapusperpustakawan', $perpustakawan->id)}}" method="post">
                        <button class="btn btn-primary btn-sm" onClick="return confirm('{{__('tableperpustakawan.confirmation')}}')">{{ __('tableperpustakawan.display.tombol3')}}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!--Change Language-->
		<a href="/perpustakawan/en">English</a>
		<a href="/perpustakawan">Indonesia</a>
</div>
@endsection