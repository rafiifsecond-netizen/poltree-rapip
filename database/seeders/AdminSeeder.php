<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_admin')->insert([
            [
                'nik_admin' => 222336,
                'nama' => 'admin1',
                'email' => null,
                'password' => 'Admin23' // Sebaiknya nanti diubah jadi Hash::make('Admin23')
            ],
        ]);
    }
}
