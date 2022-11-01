<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class ModelController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function buku()
    {
        $data_buku = Buku::all();
        return view('buku', compact('data_buku'));
    }

    public function anggota()
    {
        $data_anggota = Anggota::all();
        return view('anggota', compact('data_anggota'));
    }
}
