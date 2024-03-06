<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $DataPenjualan = [
            [
                'penjualan_id' => 1, 
                'user_id' => 3,   
                'pembeli' => 'Joo',
                'penjualan_kode' => 'TR0001',
                'penjualan_tanggal' => now(),
            ],

            [
                'penjualan_id' => 2, 
                'user_id' => 3,   
                'pembeli' => 'Adam',
                'penjualan_kode' => 'TR0002',
                'penjualan_tanggal' => now(),
            ],

            [
                'penjualan_id' => 3, 
                'user_id' => 3,   
                'pembeli' => 'Bima',
                'penjualan_kode' => 'TR0003',
                'penjualan_tanggal' => now(),
            ],

            [
                'penjualan_id' => 4, 
                'user_id' => 3,   
                'pembeli' => 'Ceci',
                'penjualan_kode' => 'TR0004',
                'penjualan_tanggal' => now(),
            ],

            [
                'penjualan_id' => 5, 
                'user_id' => 3,   
                'pembeli' => 'Dinda',
                'penjualan_kode' => 'TR0005',
                'penjualan_tanggal' => now(),
            ],

            [
                'penjualan_id' => 6, 
                'user_id' => 3,   
                'pembeli' => 'Ela',
                'penjualan_kode' => 'TR0006',
                'penjualan_tanggal' => now(),
            ],

            [
                'penjualan_id' => 7, 
                'user_id' => 3,   
                'pembeli' => 'Fani',
                'penjualan_kode' => 'TR0007',
                'penjualan_tanggal' => now(),
            ],

            [
                'penjualan_id' => 8, 
                'user_id' => 3,   
                'pembeli' => 'Galang',
                'penjualan_kode' => 'TR0008',
                'penjualan_tanggal' => now(),
            ],

            [
                'penjualan_id' => 9, 
                'user_id' => 3,   
                'pembeli' => 'Hindun',
                'penjualan_kode' => 'TR0009',
                'penjualan_tanggal' => now(),
            ],

            [
                'penjualan_id' => 10, 
                'user_id' => 3,   
                'pembeli' => 'Ichsan',
                'penjualan_kode' => 'TR0010',
                'penjualan_tanggal' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($DataPenjualan);
            
    }
}
