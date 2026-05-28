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
        DB::table('t_kategori')->insert([
            [
                'id_kategori' => 9,
                'nik' => null,
                'nama_kategori' => 'Umum',
                'icon' => 'grid'
            ],
        ]);
    }
}
