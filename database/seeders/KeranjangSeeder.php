<?php

namespace Database\Seeders;

use App\Models\Keranjang;
use Illuminate\Database\Seeder;

class KeranjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keranjang::create([
            'book_id' => 1,
            'user_id' => 1,
            'jumlah' => 2,
            'harga' => 30000
        ]);
    }
}
