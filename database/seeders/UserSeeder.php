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
                'email' => 'superadmin@mtq.co.id',
                'phone' => '081281803746',
                'password' => bcrypt('superadminMTQ#123'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Admin',
                'role_id' => 2,
                'email' => 'admin@mtq.co.id',
                'phone' => '081281803746',
                'password' => bcrypt('adminMTQ#___'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Member',
                'role_id' => 3,
                'email' => 'member@mtq.co.id',
                'phone' => '081281803746',
                'password' => bcrypt('adminMTQ#123'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
