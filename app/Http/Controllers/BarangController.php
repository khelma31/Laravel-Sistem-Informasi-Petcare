<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Distributor;
use Illuminate\Http\Request;
use PDF;

class BarangController extends Controller
{
    public function index()
    {
        $distributors = Distributor::all();
        $data = Barang::with('distributors')->get(); // Menambahkan eager loading untuk memuat relasi 'distributor'
        return view('barang/barang', compact('data'), compact('distributors'));
    }

    public function tambah()
    {
        $data = Barang::all();
        $distributors = Distributor::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('barang/barang-tambah', compact('data', 'distributors'));
    }

    public function insert(Request $request)
    {
        $barang = new Barang($request->all());
        $barang->save();
        return redirect()->route('barang');
    }

    public function edit($id)
    {
        $data = Barang::with('distributors')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $distributors = Distributor::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('barang/barang-edit', compact('data', 'distributors'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->fill($request->all());
        $barang->save();
        return redirect()->route('barang');
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('barang');
    }

    public function export()
    {
        $data = Barang::all();
        $pdf = PDF::loadView('barang.barang-export', compact('data'));

        return $pdf->download('data-barang.pdf');
    }
}
