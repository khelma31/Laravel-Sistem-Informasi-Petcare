<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Konsumen;
use App\Models\Pelanggan;
use App\Models\Hewan;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        $totalKonsumen = Konsumen::count();
        $totalPelanggan = Pelanggan::count();
        $totalPegawai = Pegawai::count();
        $totalHewan = Hewan::count();
        return view('index', compact('data', 'totalKonsumen', 'totalPelanggan', 'totalPegawai', 'totalHewan'));
    }
}
