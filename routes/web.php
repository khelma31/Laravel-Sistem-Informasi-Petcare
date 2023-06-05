<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\TkonsumenController;
use App\Http\Controllers\TpelangganController;
use App\Http\Controllers\PenukaranController;
use App\Http\Controllers\IndexController;

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

//Index
Route::get('/', [IndexController::class, 'index'])->name('index');

//----------------------------------------------------------------------------------------------------------

//Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');

Route::get('/pegawai-tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai-insert', [PegawaiController::class, 'insert']);

Route::get('/pegawai-edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai-update/{id}', [PegawaiController::class, 'update']);

Route::get('/pegawai-delete/{id}', [PegawaiController::class, 'delete']);
Route::get('/pegawai-export/{id}', [PegawaiController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//Konsumen
Route::get('/konsumen', [KonsumenController::class, 'index'])->name('konsumen');

Route::get('/konsumen-tambah', [KonsumenController::class, 'tambah']);
Route::post('/konsumen-insert', [KonsumenController::class, 'insert']);

Route::get('/konsumen-edit/{id}', [KonsumenController::class, 'edit']);
Route::post('/konsumen-update/{id}', [KonsumenController::class, 'update']);

Route::get('/konsumen-delete/{id}', [KonsumenController::class, 'delete']);
Route::get('/konsumen-export/{id}', [KonsumenController::class, 'export']);


//----------------------------------------------------------------------------------------------------------

//Pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');

Route::get('/pelanggan-tambah', [PelangganController::class, 'tambah']);
Route::post('/pelanggan-insert', [PelangganController::class, 'insert']);

Route::get('/pelanggan-edit/{id}', [PelangganController::class, 'edit']);
Route::post('/pelanggan-update/{id}', [PelangganController::class, 'update']);

Route::get('/pelanggan-delete/{id}', [PelangganController::class, 'delete']);
Route::get('/pelanggan-export/{id}', [PelangganController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//Hewan
Route::get('/hewan', [HewanController::class, 'index'])->name('hewan');

Route::get('/hewan-tambah', [HewanController::class, 'tambah']);
Route::post('/hewan-insert', [HewanController::class, 'insert']);

Route::get('/hewan-edit/{id}', [HewanController::class, 'edit']);
Route::post('/hewan-update/{id}', [HewanController::class, 'update']);

Route::get('/hewan-delete/{id}', [HewanController::class, 'delete']);
Route::get('/hewan-export/{id}', [HewanController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//Pengguna
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');

Route::get('/pengguna-tambah', [PenggunaController::class, 'tambah']);
Route::post('/pengguna-insert', [PenggunaController::class, 'insert']);

Route::get('/pengguna-edit/{id}', [PenggunaController::class, 'edit']);
Route::post('/pengguna-update/{id}', [PenggunaController::class, 'update']);

Route::get('/pengguna-delete/{id}', [PenggunaController::class, 'delete']);
Route::get('/pengguna-export/{id}', [PenggunaController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//Barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang');

Route::get('/barang-tambah', [BarangController::class, 'tambah']);
Route::post('/barang-insert', [BarangController::class, 'insert']);

Route::get('/barang-edit/{id}', [BarangController::class, 'edit']);
Route::post('/barang-update/{id}', [BarangController::class, 'update']);

Route::get('/barang-delete/{id}', [BarangController::class, 'delete']);
Route::get('/barang-export/{id}', [BarangController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//Distributor
Route::get('/distributor', [DistributorController::class, 'index'])->name('distributor');

Route::get('/distributor-tambah', [DistributorController::class, 'tambah']);
Route::post('/distributor-insert', [DistributorController::class, 'insert']);

Route::get('/distributor-edit/{id}', [DistributorController::class, 'edit']);
Route::post('/distributor-update/{id}', [DistributorController::class, 'update']);

Route::get('/distributor-delete/{id}', [DistributorController::class, 'delete']);
Route::get('/distributor-export/{id}', [DistributorController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//Layanan
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

Route::get('/layanan-tambah', [LayananController::class, 'tambah']);
Route::post('/layanan-insert', [LayananController::class, 'insert']);

Route::get('/layanan-edit/{id}', [LayananController::class, 'edit']);
Route::post('/layanan-update/{id}', [LayananController::class, 'update']);

Route::get('/layanan-delete/{id}', [LayananController::class, 'delete']);
Route::get('/layanan-export/{id}', [LayananController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//Poin
Route::get('/poin', [PoinController::class, 'index'])->name('poin');

Route::get('/poin-tambah', [PoinController::class, 'tambah']);
Route::post('/poin-insert', [PoinController::class, 'insert']);

Route::get('/poin-edit/{id}', [PoinController::class, 'edit']);
Route::post('/poin-update/{id}', [PoinController::class, 'update']);

Route::get('/poin-delete/{id}', [PoinController::class, 'delete']);
Route::get('/poin-export/{id}', [PoinController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//Penukaran Poin
Route::get('/penukaran', [PenukaranController::class, 'index'])->name('penukaran');

Route::get('/penukaran-tambah', [PenukaranController::class, 'tambah']);
Route::post('/penukaran-insert', [PenukaranController::class, 'insert']);

Route::get('/penukaran-edit/{id}', [PenukaranController::class, 'edit']);
Route::post('/penukaran-update/{id}', [PenukaranController::class, 'update']);

Route::get('/penukaran-delete/{id}', [PenukaranController::class, 'delete']);
Route::get('/penukaran-export/{id}', [PenukaranController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//Saran
Route::get('/saran', [SaranController::class, 'index'])->name('saran');

Route::get('/saran-tambah', [SaranController::class, 'tambah']);
Route::post('/saran-insert', [SaranController::class, 'insert']);

Route::get('/saran-edit/{id}', [SaranController::class, 'edit']);
Route::post('/saran-update/{id}', [SaranController::class, 'update']);

Route::get('/saran-delete/{id}', [SaranController::class, 'delete']);
Route::get('/saran-export/{id}', [SaranController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//TKonsumen
Route::get('/tkonsumen', [TkonsumenController::class, 'index'])->name('tkonsumen');

Route::get('/tkonsumen-tambah', [TkonsumenController::class, 'tambah']);
Route::post('/tkonsumen-insert', [TkonsumenController::class, 'insert']);

Route::get('/tkonsumen-edit/{id}', [TkonsumenController::class, 'edit']);
Route::post('/tkonsumen-update/{id}', [TkonsumenController::class, 'update']);

Route::get('/tkonsumen-delete/{id}', [TkonsumenController::class, 'delete']);
Route::get('/tkonsumen-export/{id}', [TkonsumenController::class, 'export']);

//----------------------------------------------------------------------------------------------------------

//TPelanggan
Route::get('/tpelanggan', [TpelangganController::class, 'index'])->name('tpelanggan');

Route::get('/tpelanggan-tambah', [TpelangganController::class, 'tambah']);
Route::post('/tpelanggan-insert', [TpelangganController::class, 'insert']);

Route::get('/tpelanggan-edit/{id}', [TpelangganController::class, 'edit']);
Route::post('/tpelanggan-update/{id}', [TpelangganController::class, 'update']);

Route::get('/tpelanggan-delete/{id}', [TpelangganController::class, 'delete']);
Route::get('/tpelanggan-export/{id}', [TpelangganController::class, 'export']);