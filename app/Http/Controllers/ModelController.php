<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Anggota;

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

    public function Anggota()
    {
        $data_anggota = Anggota::all();
        return view('anggota', compact('data_anggota'));
    }

    public function createbuku()
    {
        return view('createbuku');
    }
    public function savebuku(Request $req)
    {
        $buku = new Buku;
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->penerbit = $req->penerbit;
        $buku->kodekategori = $req->kodekat;
        $buku->hargabuku = $req->harga;
        $buku->save();
        return redirect('/buku');
    }

    public function createanggota()
    {
        return view('createanggota');
    }
    public function saveanggota(Request $req)
    {
        $Anggota = new Anggota;
        $Anggota->NPM = $req->NPM;
        $Anggota->Nama = $req->Nama_Anggota;
        $Anggota->Kode_Gender = $req->Kode_Gender;
        $Anggota->Alamat = $req->Alamat;
        $Anggota->save();
        return redirect('/anggota');
    }

    public function delbuku($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

    public function delanggota($id)
    {
        $Anggota = Anggota::find($id);
        $Anggota->delete();
        return redirect('/anggota');
    }

    public function editbuku($id)
    {
        $buku = Buku::find($id);
        return view('editbuku', compact('buku'));
    }
    
    public function editanggota($id)
    {
        $Anggota = Anggota::find($id);
        return view('editanggota', compact('Anggota'));
    }

    public function updatebuku(Request $req, $id)
    {
        $buku = Buku::find($id);
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->penerbit = $req->penerbit;
        $buku->kodekategori = $req->kodekat;
        $buku->hargabuku = $req->harga;
        $buku->update();
        return redirect('/buku');
    }
    
    public function updateanggota(Request $req, $id)
    {
        $Anggota = Anggota::find($id);
        $Anggota->NPM = $req->NPM;
        $Anggota->Nama = $req->Nama_Anggota;
        $Anggota->Kode_Gender = $req->Kode_Gender;
        $Anggota->Alamat = $req->Alamat;
        $Anggota->update();
        return redirect('/anggota');
    }
}
