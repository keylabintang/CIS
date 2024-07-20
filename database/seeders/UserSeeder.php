<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh menambahkan user baru
        DB::table('users')->insert([
            'nama' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role_as' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('member')->insert([
            'nama_anak' => 'Admin',
            'jenis_kelamin' => '-',
            'tanggal_lahir' => '2015-07-01',
            'umur' => '14',
            'ig_anak' => '-',
            'nama_ortu' => '-',
            'wa_ortu' => '123',
            'ig_ortu' => '-',
            'alamat' => '-',
            'asal_sekolah' => '-',
            'level' => '-',
            'foto' => 'asd.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
