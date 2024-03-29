<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Board;
use App\Models\Card;
use App\Models\CardList;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = User::create([
            'name' => 'Cavin Hartono Putra',
            'email' => 'cavin@gmail.com',
            'password' => Hash::make("cavin12345"),
        ]);

        $boards = Board::factory(10)->for($user)->create();

        foreach ($boards as $board) {
            $cardList = CardList::factory()->create([
                'board_id' => $board->id,
                'user_id' => $user->id
            ]);

            Card::factory(50)->create([
                'board_id' => $board->id,
                'user_id' => $user->id,
                'card_list_id' => $cardList->id
            ]);
        }
    }
}
