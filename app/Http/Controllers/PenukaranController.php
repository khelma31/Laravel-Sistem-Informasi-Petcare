<?php

namespace App\Http\Controllers;

use App\Models\Penukaran;
use App\Models\Poin;
use Illuminate\Http\Request;
use PDF;

class PenukaranController extends Controller
{
    public function index()
    {
        $poins = Poin::all();
        $data = Penukaran::with('poins')->get(); // Menambahkan eager loading untuk memuat relasi 'distributor'
        return view('penukaran/penukaran', compact('data'), compact('poins'));
    }

    public function tambah()
    {
        $data = Penukaran::all();
        $poins = Poin::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('penukaran/penukaran-tambah', compact('data', 'poins'));
    }

    public function insert(Request $request)
    {
        $data = new Penukaran($request->all());
        $data->save();
        return redirect()->route('penukaran');
    }

    public function edit($id)
    {
        $data = Penukaran::with('poins')->find($id); // Menambahkan eager loading untuk memuat relasi 'distributor'
        $poins = Poin::all(); // Menampilkan semua distributor untuk pilihan dropdown
        return view('penukaran/penukaran-edit', compact('data', 'poins'));
    }

    public function update(Request $request, $id)
    {
        $data = Penukaran::find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('penukaran');
    }

    public function delete($id)
    {
        $data = Penukaran::find($id);
        $data->delete();
        return redirect()->route('penukaran');
    }

    public function export()
    {
        $data = Penukaran::all();
        $pdf = PDF::loadView('penukaran.penukaran-export', compact('data'));

        return $pdf->download('data-penukaran.pdf');
    }
}
