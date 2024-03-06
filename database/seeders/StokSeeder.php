<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data stok
        $stokData = [
            [
                'barang_id' => 1, // Laptop
                'user_id' => 1,   // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
            ],
            [
                'barang_id' => 2, // Smartphone
                'user_id' => 1,   // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 30,
            ],
            [
                'barang_id' => 3, // Kemeja
                'user_id' => 1,   // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
            ],
            [
                'barang_id' => 4, // Celana Jeans
                'user_id' => 1,   // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 80,
            ],
            [
                'barang_id' => 5, // Blender
                'user_id' => 1,   // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 20,
            ],
            [
                'barang_id' => 6, // Panci
                'user_id' => 1,   // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
            ],
            [
                'barang_id' => 7, // Oli Mesin
                'user_id' => 1,   // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
            ],
            [
                'barang_id' => 8, // Wiper Mobil
                'user_id' => 1,   // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 70,
            ],
            [
                'barang_id' => 9, // Novel
                'user_id' => 1,   // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 60,
            ],
            [
                'barang_id' => 10, // Buku Ensiklopedia
                'user_id' => 1,    // User ID yang sesuai
                'stok_tanggal' => now(),
                'stok_jumlah' => 40,
            ],
        ];

        // Insert data ke tabel t_stok
        DB::table('t_stok')->insert($stokData);
    }
}
