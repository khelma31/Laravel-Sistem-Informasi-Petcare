<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use PDF;

class LayananController extends Controller
{
    public function index()
    {
        $data = Layanan::all();
        return view('layanan/layanan', compact('data'));
    }

    public function tambah()
    {
        return view('layanan/layanan-tambah');
    }

    public function insert(Request $request)
    {
        Layanan::create($request->all());
        return redirect()->route('layanan');
    }

    public function edit($id)
    {
        $data = Layanan::find($id);
        return view('layanan/layanan-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Layanan::find($id);
        $data->update($request->all());
        return redirect()->route('layanan');
    }

    public function delete($id)
    {
        $data = Layanan::find($id);
        $data->delete();
        return redirect()->route('layanan');
    }

    public function export()
    {
        $data = Layanan::all();
        $pdf = PDF::loadView('layanan.layanan-export', compact('data'));

        return $pdf->download('data-layanan.pdf');
    }
}
