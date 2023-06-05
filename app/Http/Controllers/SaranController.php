<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use PDF;

class SaranController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        $data = Saran::with('penggunas')->get(); // Menambahkan eager loading untuk memuat relasi 'distributor'
        return view('saran/saran', compact('data'), compact('penggunas'));
    }

    public function tambah()
    {
        $data = Saran::all();
        $penggunas = Pengguna::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('saran/saran-tambah', compact('data', 'penggunas'));
    }

    public function insert(Request $request)
    {
        $data = new Saran($request->all());
        $data->save();
        return redirect()->route('saran');
    }

    public function edit($id)
    {
        $data = Saran::with('penggunas')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $penggunas = Pengguna::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('saran/saran-edit', compact('data', 'penggunas'));
    }

    public function update(Request $request, $id)
    {
        $data = Saran::find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('saran');
    }

    public function delete($id)
    {
        $data = Saran::find($id);
        $data->delete();
        return redirect()->route('saran');
    }

    public function export()
    {
        $data = Saran::all();
        $pdf = PDF::loadView('saran.saran-export', compact('data'));

        return $pdf->download('data-saran.pdf');
    }
}
