<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{
    function index()
    {
        return view('dashboard.profile.index');
    }

    function update(Request $request)
    {
        $request->validate([
            '_foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            '_email' => 'required|email'
        ],[
            '_foto.image' => 'File harus berformat gambar dengan ekstensi jpeg,png,jpg,gif,svg dengan ukuran maksimal 2048kb',
            '_email.required' => 'Email harus diisi',
            '_email.email' => 'Format email tidak sesuai'
        ]);

        if($request->hasFile('_foto')) {
            $foto_file = $request->file('_foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis').".".$foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_baru);

            //jika ada update foto
            $foto_lama = get_meta_value('_foto');
            File::delete(public_path('foto/'.$foto_lama));

            metadata::updateOrCreate(
                ['meta_key' => '_foto'],
                ['meta_value' => $foto_baru]
            );
        } 
        metadata::updateOrCreate(
            ['meta_key' => '_email'],
            ['meta_value' => $request->input('_email')]
        );
        metadata::updateOrCreate(
            ['meta_key' => '_kota'],
            ['meta_value' => $request->input('_kota')]
        );
        metadata::updateOrCreate(
            ['meta_key' => '_provinsi'],
            ['meta_value' => $request->input('_provinsi')]
        );
        metadata::updateOrCreate(
            ['meta_key' => '_notelp'],
            ['meta_value' => $request->input('_notelp')]
        );

        metadata::updateOrCreate(
            ['meta_key' => '_facebook'],
            ['meta_value' => $request->input('_facebook')]
        );
        metadata::updateOrCreate(
            ['meta_key' => '_twitter'],
            ['meta_value' => $request->input('_twitter')]
        );
        metadata::updateOrCreate(
            ['meta_key' => '_linkedin'],
            ['meta_value' => $request->input('_linkedin')]
        );
        metadata::updateOrCreate(
            ['meta_key' => '_github'],
            ['meta_value' => $request->input('_github')]
        );

        return redirect()->route('profile.index')->with('success', 'Berhasil update data profile');
        }
    }


