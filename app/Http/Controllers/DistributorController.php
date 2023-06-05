<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;
use PDF;

class DistributorController extends Controller
{
    public function index()
    {
        $data = Distributor::all();
        return view('distributor/distributor', compact('data'));
    }

    public function tambah()
    {
        return view('distributor/distributor-tambah');
    }

    public function insert(Request $request)
    {
        Distributor::create($request->all());
        return redirect()->route('distributor');
    }

    public function edit($id)
    {
        $data = Distributor::find($id);
        return view('distributor/distributor-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Distributor::find($id);
        $data->update($request->all());
        return redirect()->route('distributor');
    }

    public function delete($id)
    {
        $data = Distributor::find($id);
        $data->delete();
        return redirect()->route('distributor');
    }

    public function export()
    {
        $data = Distributor::all();
        $pdf = PDF::loadView('distributor.distributor-export', compact('data'));

        return $pdf->download('data-distributor.pdf');
    }
}
