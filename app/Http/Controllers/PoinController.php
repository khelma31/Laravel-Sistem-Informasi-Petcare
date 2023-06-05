<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use Illuminate\Http\Request;
use PDF;

class PoinController extends Controller
{
    public function index()
    {
        $data = Poin::all();
        return view('poin/poin', compact('data'));
    }

    public function tambah()
    {
        return view('poin/poin-tambah');
    }

    public function insert(Request $request)
    {
        Poin::create($request->all());
        return redirect()->route('poin');
    }

    public function edit($id)
    {
        $data = Poin::find($id);
        return view('poin/poin-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Poin::find($id);
        $data->update($request->all());
        return redirect()->route('poin');
    }

    public function delete($id)
    {
        $data = Poin::find($id);
        $data->delete();
        return redirect()->route('poin');
    }

    public function export()
    {
        $data = Poin::all();
        $pdf = PDF::loadView('poin.poin-export', compact('data'));

        return $pdf->download('data-poin.pdf');
    }
}
