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
Route::get('/buku', [ModelController::class,'buku']);

// Route form input & insert new buku (CREATE)
Route::get('/createbuku', [ModelController::class,'createbuku']);
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
Route::get('/anggota', [ModelController::class,'anggota']);

// Route form input & insert new Anggota (CREATE)
Route::get('/createanggota', [ModelController::class,'createanggota']);
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
Route::get('/perpustakawan', [ModelController::class,'perpustakawan']);

// Route form input & insert new Perpustakawan  (CREATE)
Route::get('/createperpustakawan', [ModelController::class,'createperpustakawan']);
Route::post('/saveperpustakawan', [ModelController::class,'saveperpustakawan']);

// Route remove Perpustakawan (DELETE)
Route::post('/delperpustakawan/{id}', [ModelController::class,'delperpustakawan'])
    ->name('hapusperpustakawan');

// Route form edit & update Perpustakawan (UPDATE)
Route::get('/editperpustakawan/{id}', [ModelController::class,'editperpustakawan'])
    ->name('ubahperpustakawan');
Route::post('/updateperpustakawan/{id}', [ModelController::class,'updateperpustakawan'])
    ->name('modifperpustakawan');



?>