<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;
use PDF;

class HewanController extends Controller
{
    public function index()
    {
        $data = Hewan::all();
        return view('hewan/hewan', compact('data'));
    }

    public function tambah()
    {
        return view('hewan/hewan-tambah');
    }

    public function insert(Request $request)
    {
        Hewan::create($request->all());
        return redirect()->route('hewan');
    }

    public function edit($id)
    {
        $data = Hewan::find($id);
        return view('hewan/hewan-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Hewan::find($id);
        $data->update($request->all());
        return redirect()->route('hewan');
    }

    public function delete($id)
    {
        $data = Hewan::find($id);
        $data->delete();
        return redirect()->route('hewan');
    }

    public function export()
    {
        $data = Hewan::all();
        $pdf = PDF::loadView('hewan.hewan-export', compact('data'));

        return $pdf->download('data-hewan.pdf');
    }
}
