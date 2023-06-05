<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use PDF;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai/pegawai', compact('data'));
    }

    public function tambah()
    {
        return view('pegawai/pegawai-tambah');
    }

    public function insert(Request $request)
    {
        Pegawai::create($request->all());
        return redirect()->route('pegawai');
    }

    public function edit($id)
    {
        $data = Pegawai::find($id);
        return view('pegawai/pegawai-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai');
    }

    public function delete($id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai');
    }

    public function export()
    {
        $data = Pegawai::all();
        $pdf = PDF::loadView('pegawai.pegawai-export', compact('data'));

        return $pdf->download('data-pegawai.pdf');
    }
}
