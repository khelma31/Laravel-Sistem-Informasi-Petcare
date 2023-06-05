<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Pengguna;
use App\Models\Hewan;
use Illuminate\Http\Request;
use PDF;

class PelangganController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        $hewans = Hewan::all();
        $data = Pelanggan::with('pengguna', 'hewan')->get();
        return view('pelanggan/pelanggan', compact('data', 'penggunas', 'hewans'));
    }

    public function tambah()
    {
        $penggunas = Pengguna::all();
        $hewans = Hewan::all();
        $data = Pelanggan::all();
        return view('pelanggan/pelanggan-tambah', compact('data', 'penggunas', 'hewans'));
    }

    public function insert(Request $request)
    {
        $data = new Pelanggan($request->all());
        $data->save();
        return redirect()->route('pelanggan');
    }

    public function edit($id)
    {
        $data = Pelanggan::with('pengguna', 'hewan')->find($id);
        $penggunas = Pengguna::all();
        $hewans = Hewan::all();
        return view('pelanggan/pelanggan-edit', compact('data', 'penggunas', 'hewans'));
    }

    public function update(Request $request, $id)
    {
        $data = Pelanggan::find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('pelanggan');
    }

    public function delete($id)
    {
        $data = Pelanggan::find($id);
        $data->delete();
        return redirect()->route('pelanggan');
    }

    public function export()
    {
        $data = Pelanggan::all();
        $pdf = PDF::loadView('pelanggan.pelanggan-export', compact('data'));

        return $pdf->download('data-pelanggan.pdf');
    }
}
