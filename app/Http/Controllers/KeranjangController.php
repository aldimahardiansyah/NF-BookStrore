<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    function index(){
        if(Auth::check()){
            return view('contents.keranjang', [
                'title' => 'Keranjang',
                'keranjang' => Keranjang::where('user_id', Auth::user()->id)->get()
            ]);
        } else{
            return redirect('/login')->with('jsAlert', 'Mohon login terlebih dahulu sebelum mengakses keranjang!');
        }
    }

    function store(Request $request){
        if(Auth::check()){
            $input = [
                'jumlah' => $request->jumlah,
                'harga' => $request->harga,
                'book_id' => $request->book_id,
                'user_id' => Auth::user()->id
            ];
    
            $available = Keranjang::where('book_id', $request->book_id)->first();
            if($available){
                return $this->update($available, $input);
            } else{
                if(Keranjang::create($input)){
                    return back()->with('jsAlert', 'Berhasil ditambahkan ke keranjang!');
                } else{
                    return back()->with('jsAlert', 'Gagal ditambahkan!');
                }
            }
        } else{
            return back()->with('jsAlert', 'Mohon login terlebih dahulu!');
        }
    }

    function update($keranjang, $input){
        $value = [
            'jumlah' => $input['jumlah'] + $keranjang->jumlah,
            'harga' => $input['harga'] + $keranjang->harga,
            'book_id' => $keranjang->book_id,
            'user_id' => $keranjang->user_id
        ];

        if($keranjang->update($value)){
            return back()->with('jsAlert', 'Berhasil ditambahkan ke keranjang!');
        } else{
            return back()->with('jsAlert', 'Gagal ditambahkan!');
        }
    }

    function destroy($id){
        if(Keranjang::find($id)->delete()){
            return back()->with('jsAlert', 'Berhasil di hapus!');
        } else{
            return back()->with('jsAlert', 'Gagal di hapus!');
        }
    }
}
