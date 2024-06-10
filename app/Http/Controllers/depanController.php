<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use Illuminate\Http\Request;

class depanController extends Controller
{
    public function index()
    {
       $about_id = get_meta_value('about_id');
       $about_data = halaman::where('id',$about_id)->first();
        return view('depan.index')->with(['about',$about_data]);
    }
}
