<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangData = [
            [   
                'barang_id' => 1,
                'kategori_id' => 1, // Elektronik
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1, // Elektronik
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 2000000,
                'harga_jual' => 3000000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2, // Pakaian
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2, // Pakaian
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3, // Alat Rumah Tangga
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Blender',
                'harga_beli' => 300000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3, // Alat Rumah Tangga
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Panci',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4, // Otomotif
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Oli Mesin',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4, // Otomotif
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Wiper Mobil',
                'harga_beli' => 30000,
                'harga_jual' => 45000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5, // Buku
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Novel',
                'harga_beli' => 50000,
                'harga_jual' => 70000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5, // Buku
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Buku Ensiklopedia',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
        ];

        // Insert data ke tabel m_barang
        DB::table('m_barang')->insert($barangData);
    
    }
}
