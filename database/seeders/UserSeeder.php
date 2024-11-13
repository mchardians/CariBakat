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
                'fullname' => 'Pelamar',
                'email' => 'pelamar@caribakat.com',
                'password' => bcrypt('userpelamar'),
                "phone" => fake()->unique()->numerify("08###########"),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1
            ],
            [
                'fullname' => 'HRD',
                'email' => 'hrd@caribakat.com',
                'password' => bcrypt('userhrd'),
                "phone" => fake()->unique()->numerify("08###########"),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 2
            ],
            [
                'fullname' => 'Manajer',
                'email' => 'manajer@caribakat.com',
                'password' => bcrypt('usermanajer'),
                "phone" => fake()->unique()->numerify("08###########"),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 3
            ]
        ]);
    }
}
