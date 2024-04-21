<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conference;
use Illuminate\Support\Facades\DB;

class ConferenceSeeder extends Seeder
{
    public function run()
    {
        DB::table('conferences')->truncate();

        Conference::create([
            'title' => 'Example Conference 1',
            'description' => 'This is the description of the first example conference.',
            'date' => now()->addDays(10),
            'address' => '123 Example St, Example City, Country',
            'participants' => 100,
        ]);

        Conference::create([
            'title' => 'Example Conference 2',
            'description' => 'This is the description of the second example conference.',
            'date' => now()->addDays(30),
            'address' => '456 Example Rd, Example Town, Country',
            'participants' => 350,
        ]);
    }
}
