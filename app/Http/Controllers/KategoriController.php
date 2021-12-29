<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function show($id){
        $kategori = Kategori::find($id);

        return view('contents.kategori', [
            'title' => "$kategori->nama",
            'kategori' => $kategori
        ]);
    }
}
