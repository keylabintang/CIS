<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('member')->insert([
            'nama_anak' => 'Reza',
            'jenis_kelamin' => 'laki-laki',
            'tanggal_lahir' => '2023-11-12',
            'umur' => 13,
            'ig_anak' => 'adas',
            'nama_ortu' => 'lolo',
            'wa_ortu' => '0833213',
            'ig_ortu' => '123123',
            'alamat' => 'asdasdas',
            'asal_sekolah' => 'asdasd',
            'level' => 'warior',
        ]);
    }
}
