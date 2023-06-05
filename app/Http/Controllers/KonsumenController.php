<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use App\Models\Pengguna;
use App\Models\Hewan;
use Illuminate\Http\Request;
use PDF;

class KonsumenController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        $hewans = Hewan::all();
        $data = Konsumen::with('pengguna', 'hewan')->get();
        return view('konsumen/konsumen', compact('data', 'penggunas', 'hewans'));
    }

    public function tambah()
    {
        $penggunas = Pengguna::all();
        $hewans = Hewan::all();
        $data = Konsumen::all();
        return view('konsumen/konsumen-tambah', compact('data', 'penggunas', 'hewans'));
    }

    public function insert(Request $request)
    {
        $data = new Konsumen($request->all());
        $data->save();
        return redirect()->route('konsumen');
    }

    public function edit($id)
    {
        $data = Konsumen::with('pengguna', 'hewan')->find($id);
        $penggunas = Pengguna::all();
        $hewans = Hewan::all();
        return view('konsumen/konsumen-edit', compact('data', 'penggunas', 'hewans'));
    }

    public function update(Request $request, $id)
    {
        $data = Konsumen::find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('konsumen');
    }

    public function delete($id)
    {
        $data = Konsumen::find($id);
        $data->delete();
        return redirect()->route('konsumen');
    }

    public function export()
    {
        $data = Konsumen::all();
        $pdf = PDF::loadView('konsumen.konsumen-export', compact('data'));

        return $pdf->download('data-konsumen.pdf');
    }
}
