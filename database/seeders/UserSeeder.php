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
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role_as' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Member',
            'email' => 'member@example.com',
            'password' => bcrypt('password'),
            'role_as' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]); // 
        
        DB::table('users')->insert([
            'name' => 'Firli Ardiansyah Hadi',
            'email' => 'firliardiansyah31@gmail.com',
            'password' => bcrypt('basaraid'),
            'role_as' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]); // AndaAnda dapat menambahkan lebih banyak data user sesuai kebutuhan
    }
}
