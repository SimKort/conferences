<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::truncate();

        User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
        ]);

    }
}
