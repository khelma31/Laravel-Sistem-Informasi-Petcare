<?php

namespace App\Http\Controllers;

use App\Models\Tkonsumen;
use App\Models\Konsumen;
use App\Models\Pegawai;
use App\Models\Layanan;
use App\Models\Barang;
use App\Models\Penukaran;
use Illuminate\Http\Request;
use PDF;

class TkonsumenController extends Controller
{
    public function index()
    {
        $konsumens = Konsumen::all();
        $pegawais = Pegawai::all();
        $layanans = Layanan::all();
        $barangs = Barang::all();
        $penukarans = Penukaran::all();
        $data = Tkonsumen::with('konsumens', 'pegawais', 'layanans', 'barangs', 'penukarans')->get();
        return view('tkonsumen/tkonsumen', compact('data', 'konsumens', 'pegawais', 'layanans', 'barangs', 'penukarans'));
    }

    public function tambah()
    {
        $konsumens = Konsumen::all();
        $pegawais = Pegawai::all();
        $layanans = Layanan::all();
        $barangs = Barang::all();
        $penukarans = Penukaran::all();
        $data = Tkonsumen::all();
        return view('tkonsumen/tkonsumen-tambah', compact('data', 'konsumens', 'pegawais', 'layanans', 'barangs', 'penukarans'));
    }

    public function insert(Request $request)
    {
        $data = new Tkonsumen($request->all());
        $data->save();
        return redirect()->route('tkonsumen');
    }

    public function edit($id)
    {
        $konsumens = Konsumen::all();
        $pegawais = Pegawai::all();
        $layanans = Layanan::all();
        $barangs = Barang::all();
        $penukarans = Penukaran::all();
        $data = Tkonsumen::with('konsumens', 'pegawais', 'layanans', 'barangs', 'penukarans')->find($id);
        return view('tkonsumen/tkonsumen-edit', compact('data', 'konsumens', 'pegawais', 'layanans', 'barangs', 'penukarans'));
    }

    public function update(Request $request, $id)
    {
        $data = Tkonsumen::find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('tkonsumen');
    }

    public function delete($id)
    {
        $data = Tkonsumen::find($id);
        $data->delete();
        return redirect()->route('tkonsumen');
    }

    public function export()
    {
        $data = Tkonsumen::all();
        $pdf = PDF::loadView('tkonsumen.tkonsumen-export', compact('data'));

        return $pdf->download('data-tkonsumen.pdf');
    }
}
