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
        $data = [
            [
                'kategori_id' => '1',
                'kategori_code' => 'AT',
                'kategori_nama' => 'Alat Tulis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => '2',
                'kategori_code' => 'SBK',
                'kategori_nama' => 'Sembako',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => '3',
                'kategori_code' => 'MKN',
                'kategori_nama' => 'Makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => '4',
                'kategori_code' => 'MNM',
                'kategori_nama' => 'Minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => '5',
                'kategori_code' => 'OBT',
                'kategori_nama' => 'Obat-obatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into database
        DB::table('m_kategori')->insert($data);
    }
}
