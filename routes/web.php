<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route display buku (READ)
Route::get('/buku/{locale?}', [ModelController::class,'buku']);

// Route form input & insert new buku (CREATE)
Route::get('/createbuku/{locale?}', [ModelController::class,'createbuku']);
Route::post('/savebuku', [ModelController::class,'savebuku']);

// Route remove buku (DELETE)
Route::post('/delbuku/{id}', [ModelController::class,'delbuku'])
    ->name('hapusbuku');

// Route form edit & update buku (UPDATE)
Route::get('/editbuku/{id}', [ModelController::class,'editbuku'])
    ->name('ubahbuku');
Route::post('/updatebuku/{id}',[ModelController::class,'updatebuku'])
    ->name('modifbuku');

// Route display Anggota (READ)
Route::get('/anggota/{locale?}', [ModelController::class,'anggota']);

// Route form input & insert new Anggota (CREATE)
Route::get('/createanggota/{locale?}', [ModelController::class,'createanggota']);
Route::post('/saveanggota', [ModelController::class,'saveanggota']);

// Route remove Anggota (DELETE)
Route::post('/delanggota/{id}', [ModelController::class,'delanggota'])
    ->name('hapusanggota');

// Route form edit & update Perpustakawan (UPDATE)
Route::get('/editanggota/{id}', [ModelController::class,'editanggota'])
    ->name('ubahanggota');
Route::post('/updateanggota/{id}', [ModelController::class,'updateanggota'])
    ->name('modifanggota');

// Route display Perpustakawan (READ)
Route::get('/perpustakawan/{locale?}', [ModelController::class,'perpustakawan']);

// Route form input & insert new Perpustakawan  (CREATE)
Route::get('/createperpustakawan/{locale?}', [ModelController::class,'createperpustakawan']);
Route::post('/saveperpustakawan', [ModelController::class,'saveperpustakawan']);

// Route remove Perpustakawan (DELETE)
Route::post('/delperpustakawan/{id}', [ModelController::class,'delperpustakawan'])
    ->name('hapusperpustakawan');

// Route form edit & update Perpustakawan (UPDATE)
Route::get('/editperpustakawan/{id}', [ModelController::class,'editperpustakawan'])
    ->name('ubahperpustakawan');
Route::post('/updateperpustakawan/{id}', [ModelController::class,'updateperpustakawan'])
    ->name('modifperpustakawan');

//Route Display Laporan Peminjaman(Read)
Route::get('/lap1/{locale?}', [ModelController::class,'Lap1']);

//Route Display Laporan Denda(Read)
Route::get('/lap2/{locale?}', [ModelController::class,'Lap2']);

//Route Display Rekap Perjudul(Read)
Route::get('/lap3', [ModelController::class,'Lap3']);

//Route Display Rekap Peranggota(Read)
Route::get('/lap4', [ModelController::class,'Lap4']);





//Route Display Rekap Jumlah Buku Tiap Penulis(Read)
Route::get('/lap6', [ModelController::class,'Lap6']);

?>