<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class pengaturanHalamanController extends Controller
{
    function index()
    {
        $datahalaman = halaman::orderBy('judul','asc')->get();
        return view('dashboard.pengaturanHalaman.index')->with('dataHalaman',$datahalaman);
    }

    function update(Request $request)
    {

        metadata::updateOrCreate(
            ['meta_key' => '_halaman_about'],
            ['meta_value' => $request->input('_halaman_about')]
        );
        metadata::updateOrCreate(
            ['meta_key' => '_halaman_interest'],
            ['meta_value' => $request->input('_halaman_interest')]
        );
        metadata::updateOrCreate(
            ['meta_key' => '_halaman_award'],
            ['meta_value' => $request->input('_halaman_award')]
        );
        return redirect()->route('pengaturanHalaman.index')->with('success', 'Berhasil update data pengaturan halaman');
    }
}
