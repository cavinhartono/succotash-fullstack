<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BoardsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Board::create([
            'name' => "Asep",
            'user_id' => 1
        ]);

        Board::create([
            'name' => "Rifky",
            'user_id' => 1
        ]);

        Board::create([
            'name' => "Wanda",
            'user_id' => 1
        ]);

        Board::create([
            'name' => "Marcel",
            'user_id' => 1
        ]);

        Board::create([
            'name' => "Siti",
            'user_id' => 1
        ]);
    }
}
