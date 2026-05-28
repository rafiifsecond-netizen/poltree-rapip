<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_tag')->insert([
            ['id_tag' => 10, 'nama_tag' => 'baru'],
            ['id_tag' => 2, 'nama_tag' => 'Utama'],
        ]);
    }
}
