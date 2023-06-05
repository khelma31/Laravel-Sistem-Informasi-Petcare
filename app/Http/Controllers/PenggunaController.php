<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use PDF;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = Pengguna::all();
        return view('pengguna/pengguna', compact('data'));
    }

    public function tambah()
    {
        return view('pengguna/pengguna-tambah');
    }

    public function insert(Request $request)
    {
        Pengguna::create($request->all());
        return redirect()->route('pengguna');
    }

    public function edit($id)
    {
        $data = Pengguna::find($id);
        return view('pengguna/pengguna-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pengguna::find($id);
        $data->update($request->all());
        return redirect()->route('pengguna');
    }

    public function delete($id)
    {
        $data = Pengguna::find($id);
        $data->delete();
        return redirect()->route('pengguna');
    }

    public function export()
    {
        $data = Pengguna::all();
        $pdf = PDF::loadView('pengguna.pengguna-export', compact('data'));

        return $pdf->download('data-pengguna.pdf');
    }
}
