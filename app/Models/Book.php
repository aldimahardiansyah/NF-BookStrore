<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // melindungi id
    protected $guarded = ['id'];

    // membuat relasi ke kategori
    public function kategori(){
        return $this->belongsToMany(Kategori::class);
    }

    // membuat relasi ke penerbit
    public function penerbit(){
        return $this->belongsTo(Penerbit::class);
    }

    // membuat relasi ke penulis
    public function penulis(){
        return $this->belongsTo(Penulis::class);
    }

    // membuat relasi ke bahasa
    public function bahasa(){
        return $this->belongsTo(Bahasa::class);
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
}
