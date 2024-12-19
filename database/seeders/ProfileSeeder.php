<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        // Create a profile for the user
        $user = User::first(); // Get the first user (this should match the user we created in UserSeeder)

        Profile::create([
            'user_id' => $user->id,
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'gender' => 'Laki - Laki',
            'birth_date' => '1990-01-01',
            'nik' => '1234567890123456',
            'tempat_lahir' => 'Jakarta',
            'profile_picture' => 'https://via.placeholder.com/80', // Add a sample profile picture URL
        ]);
    }
}
