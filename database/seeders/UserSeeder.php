<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Pelamar',
                'email' => 'pelamar@caribakat.com',
                'password' => bcrypt('userpelamar'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1
            ],
            [
                'name' => 'HRD',
                'email' => 'hrd@caribakat.com',
                'password' => bcrypt('userhrd'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 2
            ],
            [
                'name' => 'Manajer',
                'email' => 'manajer@caribakat.com',
                'password' => bcrypt('usermanajer'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 3
            ]
        ]);
    }
}
