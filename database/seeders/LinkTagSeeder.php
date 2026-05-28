<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_link_tag')->insert([
            ['id' => 2, 'id_link' => 1, 'id_tag' => 2],
            ['id' => 3, 'id_link' => 2, 'id_tag' => 2],
            ['id' => 6, 'id_link' => 5, 'id_tag' => 2],
            ['id' => 7, 'id_link' => 6, 'id_tag' => 2],
            ['id' => 9, 'id_link' => 3, 'id_tag' => 2],
            ['id' => 10, 'id_link' => 4, 'id_tag' => 2],
            ['id' => 11, 'id_link' => 7, 'id_tag' => 2],
            ['id' => 30, 'id_link' => 3, 'id_tag' => 10],
            ['id' => 31, 'id_link' => 1, 'id_tag' => 10],
            ['id' => 32, 'id_link' => 4, 'id_tag' => 10],
            ['id' => 33, 'id_link' => 6, 'id_tag' => 10],
            ['id' => 34, 'id_link' => 7, 'id_tag' => 10],
            ['id' => 35, 'id_link' => 5, 'id_tag' => 10],
            ['id' => 36, 'id_link' => 2, 'id_tag' => 10],
            ['id' => 37, 'id_link' => 15, 'id_tag' => 10],
            ['id' => 38, 'id_link' => 15, 'id_tag' => 2],
        ]);
    }
}
