<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Perpustakawan;

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



    public function createbuku()
    {
        return view('createbuku');
    }
    public function savebuku(Request $req)
    {
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

    public function delbuku($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku')->with('pesan','Data buku
berhasil dihapus');
    }

    public function editbuku($id)
    {
        $buku = Buku::find($id);
        return view('editbuku', compact('buku'));
    }

    public function updatebuku(Request $req, $id)
    {$this->validate($req,[
        'judul' => 'required|string',
        'penulis' => 'required|string',
        'penerbit' => 'required|string',
        'harga' => 'required|numeric|gt:0']);
        $buku = Buku::find($id);
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->penerbit = $req->penerbit;
        $buku->kodekategori = $req->kodekat;
        $buku->hargabuku = $req->harga;
        $buku->update();
        return redirect('/buku')->with('pesan','Data buku
berhasil diubah');}
    

    public function Anggota()
    {
        $data_anggota = Anggota::all();
        return view('anggota', compact('data_anggota'));
    }

    public function createanggota()
    {
        return view('createanggota');
    }
    public function saveanggota(Request $req)
    {$this->validate($req, [
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



    public function delanggota($id)
    {
        $Anggota = Anggota::find($id);
        $Anggota->delete();
        return redirect('/anggota')->with('pesan','Data Anggota
        berhasil dihapus');
    }


    public function editanggota($id)
    {
        $Anggota = Anggota::find($id);
        return view('editanggota', compact('Anggota'));
    }



    public function updateanggota(Request $req, $id)
    {$this->validate($req, [
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
        return redirect('/anggota')->with('pesan','Data Anggota
        berhasil diubah');
    }

    public function Perpustakawan()
    {
        $data_perpustakawan = Perpustakawan::all();
        return view('perpustakawan', compact('data_perpustakawan'));
    }

    public function createperpustakawan()
    {
        return view('createperpustakawan');
    }

    public function saveperpustakawan(Request $req)
    {$this->validate($req, [
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
        return redirect('/perpustakawan')->with('pesan','Data Pegawai Perpustakawan
        berhasil dihapus');;
    }


    public function editperpustakawan($id)
    {
        $perpustakawan = Perpustakawan::find($id);
        return view('editperpustakawan', compact('perpustakawan'));
    }



    public function updateperpustakawan(Request $req, $id)
    {$this->validate($req, [
        'NIP' => 'required|numeric|gt:0',
        'Nama' => 'required|string',
        'Golongan' => 'required|string|size:2'
    ]);
        $Perpustakawan = Perpustakawan::find($id);
        $Perpustakawan->NIP = $req->NIP;
        $Perpustakawan->Nama = $req->Nama;
        $Perpustakawan->Golongan = $req->Golongan;
        $Perpustakawan->update();
        return redirect('/perpustakawan')->with('pesan','Data Anggota
        berhasil diubah');;
    }
}
