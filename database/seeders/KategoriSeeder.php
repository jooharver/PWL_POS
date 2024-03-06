<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriData = [
            [
                'kategori_kode' => 'KAT001',
                'kategori_nama' => 'Elektronik',
            ],
            [
                'kategori_kode' => 'KAT002',
                'kategori_nama' => 'Pakaian',
            ],
            [
                'kategori_kode' => 'KAT003',
                'kategori_nama' => 'Alat Rumah Tangga',
            ],
            [
                'kategori_kode' => 'KAT004',
                'kategori_nama' => 'Otomotif',
            ],
            [
                'kategori_kode' => 'KAT005',
                'kategori_nama' => 'Buku',
            ],
        ];

        // Insert data ke tabel m_kategori
        DB::table('m_kategori')->insert($kategoriData);
    }
}
