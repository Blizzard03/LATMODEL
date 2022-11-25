<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Perpustakawan;

class ModelController extends Controller
{

    //Welcome Page
    public function welcome()
    {
        return view('welcome');
    }


    //Table View Buku
    public function buku($locale = 'id')
    {App::setLocale($locale);
        $data_buku = Buku::all();
        return view('buku', compact('data_buku'),["locale" => $locale]);
    }


    //Create Form Buku
    public function createbuku($locale = 'id')
    {
        App::setLocale($locale);
        return view('createbuku', ["locale" => $locale]);
    }


    //Save Buku
    public function savebuku(Request $req)
    {
        App::setLocale($req->locale);

        $this->validate($req, [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'harga' => 'required|numeric|gt:0'
        ]);

        $buku = new Buku;
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->penerbit = $req->penerbit;
        $buku->kodekategori = $req->kodekat;
        $buku->hargabuku = $req->harga;
        $buku->save();
        return redirect('/buku')->with('pesan', 'Data buku
berhasil disimpan');
    }

    //Delete Data Buku
    public function delbuku($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku')->with('pesan', 'Data buku
berhasil dihapus');
    }


    //Edit Data Buku
    public function editbuku($id)
    {
        $buku = Buku::find($id);
        return view('editbuku', compact('buku'));
    }

    //Update Data Buku
    public function updatebuku(Request $req, $id)
    {
        $this->validate($req, [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'harga' => 'required|numeric|gt:0'
        ]);

        $buku = Buku::find($id);
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->penerbit = $req->penerbit;
        $buku->kodekategori = $req->kodekat;
        $buku->hargabuku = $req->harga;
        $buku->update();
        return redirect('/buku')->with('pesan', 'Data buku
berhasil diubah');
    }


    //Table Data View Anggota
    public function Anggota($locale = 'id')
    {
        $data_anggota = Anggota::all();
        return view('anggota', compact('data_anggota'),["locale" => $locale]);
    }

    //Form Create Anggota
    public function createanggota($locale = 'id')
    {
        App::setLocale($locale);
        return view('createanggota', ["locale" => $locale]);
    }

    //Save Data Anggota
    public function saveanggota(Request $req)
    {
        App::setLocale($req->locale);
        $this->validate($req, [
            'NPM' => 'required|numeric|gt:0',
            'Nama' => 'required|string',
            'Kode_Gender' => 'required|string',
            'Alamat' => 'required|string'
        ]);
        $Anggota = new Anggota;
        $Anggota->NPM = $req->NPM;
        $Anggota->Nama = $req->Nama_Anggota;
        $Anggota->Kode_Gender = $req->Kode_Gender;
        $Anggota->Alamat = $req->Alamat;
        $Anggota->save();
        return redirect('/anggota')->with('pesan', 'Data Anggota
        berhasil disimpan');
    }


    //Delete Data Anggota
    public function delanggota($id)
    {
        $Anggota = Anggota::find($id);
        $Anggota->delete();
        return redirect('/anggota')->with('pesan', 'Data Anggota
        berhasil dihapus');
    }


    //Edit Data Anggota
    public function editanggota($id)
    {
        $Anggota = Anggota::find($id);
        return view('editanggota', compact('Anggota'));
    }


    //Update Data Anggota
    public function updateanggota(Request $req, $id)
    {
        $this->validate($req, [
            'NPM' => 'required|numeric|gt:0',
            'Nama' => 'required|string',
            'Kode_Gender' => 'required|string',
            'Alamat' => 'required|string'
        ]);
        $Anggota = Anggota::find($id);
        $Anggota->NPM = $req->NPM;
        $Anggota->Nama = $req->Nama_Anggota;
        $Anggota->Kode_Gender = $req->Kode_Gender;
        $Anggota->Alamat = $req->Alamat;
        $Anggota->update();
        return redirect('/anggota')->with('pesan', 'Data Anggota
        berhasil diubah');
    }

    //Table View Perpustakawan
    public function Perpustakawan($locale='id')
    {App::setLocale($locale);
        $data_perpustakawan = Perpustakawan::all();
        return view('perpustakawan', compact('data_perpustakawan'),["locale" => $locale]);
    }

    public function createperpustakawan($locale='id')
    {App::setLocale($locale);
        return view('createperpustakawan',["locale" => $locale]);
    }

    public function saveperpustakawan(Request $req)
    { App::setLocale($req->locale);
        $this->validate($req, [
            'NIP' => 'required|numeric|gt:0',
            'Nama' => 'required|string',
            'Golongan' => 'required|string|size:2'
        ]);
        $Perpustakawan = new Perpustakawan;
        $Perpustakawan->NIP = $req->NIP;
        $Perpustakawan->Nama = $req->Nama;
        $Perpustakawan->Golongan = $req->Golongan;
        $Perpustakawan->save();
        return redirect('/perpustakawan')->with('pesan', 'Data Pegawai Perpustakawan
        berhasil disimpan');;
    }



    public function delperpustakawan($id)
    {
        $Perpustakawan = Perpustakawan::find($id);
        $Perpustakawan->delete();
        return redirect('/perpustakawan')->with('pesan', 'Data Pegawai Perpustakawan
        berhasil dihapus');;
    }


    public function editperpustakawan($id)
    {
        $perpustakawan = Perpustakawan::find($id);
        return view('editperpustakawan', compact('perpustakawan'));
    }



    public function updateperpustakawan(Request $req, $id)
    {
        $this->validate($req, [
            'NIP' => 'required|numeric|gt:0',
            'Nama' => 'required|string',
            'Golongan' => 'required|string|size:2'
        ]);
        $Perpustakawan = Perpustakawan::find($id);
        $Perpustakawan->NIP = $req->NIP;
        $Perpustakawan->Nama = $req->Nama;
        $Perpustakawan->Golongan = $req->Golongan;
        $Perpustakawan->update();
        return redirect('/perpustakawan')->with('pesan', 'Data Anggota
        berhasil diubah');;
    }
}
