<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_pengguna')->insert([
            ['nik' => 113103, 'nama_user' => 'Ir. Maria, S.ST., M.Sn., IPP', 'password' => '123456#', 'email' => 'maria.ipp@polibatam.ac.id', 'jabatan' => 'Dosen'],
            ['nik' => 115143, 'nama_user' => 'Ahmad Hamim Thohari, S.S.T., M.T.', 'password' => '123456#', 'email' => 'ahmad.thohari@polibatam.ac.id', 'jabatan' => 'Dosen'],
            ['nik' => 122288, 'nama_user' => 'Festy Winda Sari, S.Tr. Kom., M.Sc', 'password' => '123456#', 'email' => 'festy.winda@polibatam.ac.id', 'jabatan' => 'Dosen'],
            ['nik' => 218292, 'nama_user' => 'Dede Nurdiansyah, S.Sos', 'password' => '123456#', 'email' => 'dede.nurdiansyah@polibatam.ac.id', 'jabatan' => 'Tata Usaha'],
            ['nik' => 224345, 'nama_user' => 'Rhanna Mawira, S.E', 'password' => '123456#', 'email' => 'rhanna.mawira@polibatam.ac.id', 'jabatan' => 'Tata Usaha'],
            ['nik' => 225359, 'nama_user' => 'Miftahul Husna Ghawa, S.Tr.Kom', 'password' => '123456#', 'email' => 'miftahul.husna@polibatam.ac.id', 'jabatan' => 'Laboran'],
            ['nik' => 225361, 'nama_user' => 'Yogi Ilhami, S.Tr.T', 'password' => '123456#', 'email' => 'yogi.ilhami@polibatam.ac.id', 'jabatan' => 'Laboran'],
        ]);
    }
}
