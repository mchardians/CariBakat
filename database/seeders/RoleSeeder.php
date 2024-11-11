<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            [
                'name' => 'pelamar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'hrd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'manajer',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
