<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'Super Admin',
                'role_id' => 1,
                'email' => 'superadmin@kaltimprov.go.id',
                'phone' => '081281803746',
                'password' => bcrypt('12345678'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Admin',
                'role_id' => 2,
                'email' => 'admin@kaltimprov.go.id',
                'phone' => '081281803746',
                'password' => bcrypt('12345678'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Peserta',
                'role_id' => 3,
                'email' => 'dimaswahyu@gmail.com',
                'phone' => '081281803746',
                'password' => bcrypt('12345678'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
