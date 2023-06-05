<?php

namespace App\Http\Controllers;

use App\Models\Tpelanggan;
use App\Models\Pegawai;
use App\Models\Layanan;
use App\Models\Barang;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use PDF;

class TpelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        $pegawais = Pegawai::all();
        $layanans = Layanan::all();
        $barangs = Barang::all();
        $data = Tpelanggan::with('pelanggans', 'pegawais', 'layanans', 'barangs')->get();
        return view('tpelanggan/tpelanggan', compact('data', 'pelanggans', 'pegawais', 'layanans', 'barangs'));
    }

    public function tambah()
    {
        $pelanggans = Pelanggan::all();
        $pegawais = Pegawai::all();
        $layanans = Layanan::all();
        $barangs = Barang::all();
        $data = Tpelanggan::all();
        return view('tpelanggan/tpelanggan-tambah', compact('data', 'pelanggans', 'pegawais', 'layanans', 'barangs'));
    }

    public function insert(Request $request)
    {
        $data = new Tpelanggan($request->all());
        $data->save();
        return redirect()->route('tpelanggan');
    }

    public function edit($id)
    {
        $pelanggans = Pelanggan::all();
        $pegawais = Pegawai::all();
        $layanans = Layanan::all();
        $barangs = Barang::all();
        $data = Tpelanggan::with('pelanggans', 'pegawais', 'layanans', 'barangs')->find($id);
        return view('tpelanggan/tpelanggan-edit', compact('data', 'pelanggans', 'pegawais', 'layanans', 'barangs'));
    }

    public function update(Request $request, $id)
    {
        $data = Tpelanggan::find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('tpelanggan');
    }

    public function delete($id)
    {
        $data = Tpelanggan::find($id);
        $data->delete();
        return redirect()->route('tpelanggan');
    }

    public function export()
    {
        $data = Tpelanggan::all();
        $pdf = PDF::loadView('tpelanggan.tpelanggan-export', compact('data'));

        return $pdf->download('data-tpelanggan.pdf');
    }
}
