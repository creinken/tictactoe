<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Game;
use \App\Models\Move;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // create fake users
        $reinken =  User::create(['name' => 'Silver84',     'email' => 'dragonlord26.cr@gmail.com', 'password' => 'password']);
        $pike =     User::create(['name' => 'Piker',        'email' => 'Piker@gmail.com',           'password' => 'password']);
        $sara =     User::create(['name' => 'Seppens',      'email' => 'seppens17@gmail.com',       'password' => 'password']);
        $rich =     User::create(['name' => 'Rmarshall',    'email' => 'Rmarshall@gmail.com',       'password' => 'password']);
        User::factory(10)->create();

        // create dummy games
        $game1 = Game::create(['playerX' => $reinken->id,    'playerO' => $pike->id, 'current_player' => $pike->id, 'game_over' => 1, 'board' => "{['O','X','O'],['X','O','X'],['O','','X']}"]);
        $game2 = Game::create(['playerX' => $reinken->id,    'playerO' => $sara->id, 'current_player' => $sara->id, 'game_over' => 1, 'board' => "{['O','X','O'],['X','O','X'],['O','','X']}"]);
        $game3 = Game::create(['playerX' => $pike->id,       'playerO' => $sara->id, 'current_player' => $pike->id, 'game_over' => 1, 'board' => "{['','','X'],['O','O','X'],['X','O','X']}"]);
        // $game4 = Game::create(['playerX' => $rich->id,       'playerO' => $pike->id, 'current_player' => $pike->id, 'game_over' => 1]);
        // $game5 = Game::create(['playerX' => $reinken->id,    'playerO' => $rich->id, 'current_player' => $rich->id, 'game_over' => 0]);

        // create dummy moves
        Move::create(['squareX' => 1, 'squareY' => 0, 'user_id' => $reinken->id,    'game_id' => $game1->id]);
        Move::create(['squareX' => 0, 'squareY' => 0, 'user_id' => $pike->id,       'game_id' => $game1->id]);
        Move::create(['squareX' => 1, 'squareY' => 2, 'user_id' => $reinken->id,    'game_id' => $game1->id]);
        Move::create(['squareX' => 1, 'squareY' => 1, 'user_id' => $pike->id,       'game_id' => $game1->id]);
        Move::create(['squareX' => 2, 'squareY' => 2, 'user_id' => $reinken->id,    'game_id' => $game1->id]);
        Move::create(['squareX' => 0, 'squareY' => 2, 'user_id' => $pike->id,       'game_id' => $game1->id]);
        Move::create(['squareX' => 0, 'squareY' => 1, 'user_id' => $reinken->id,    'game_id' => $game1->id]);
        Move::create(['squareX' => 2, 'squareY' => 0, 'user_id' => $pike->id,       'game_id' => $game1->id]);
        Move::create(['squareX' => 1, 'squareY' => 0, 'user_id' => $reinken->id,    'game_id' => $game2->id]);
        Move::create(['squareX' => 0, 'squareY' => 0, 'user_id' => $sara->id,       'game_id' => $game2->id]);
        Move::create(['squareX' => 1, 'squareY' => 2, 'user_id' => $reinken->id,    'game_id' => $game2->id]);
        Move::create(['squareX' => 1, 'squareY' => 1, 'user_id' => $sara->id,       'game_id' => $game2->id]);
        Move::create(['squareX' => 2, 'squareY' => 2, 'user_id' => $reinken->id,    'game_id' => $game2->id]);
        Move::create(['squareX' => 0, 'squareY' => 2, 'user_id' => $sara->id,       'game_id' => $game2->id]);
        Move::create(['squareX' => 0, 'squareY' => 1, 'user_id' => $reinken->id,    'game_id' => $game2->id]);
        Move::create(['squareX' => 2, 'squareY' => 0, 'user_id' => $sara->id,       'game_id' => $game2->id]);
        Move::create(['squareX' => 2, 'squareY' => 0, 'user_id' => $pike->id,       'game_id' => $game3->id]);
        Move::create(['squareX' => 1, 'squareY' => 0, 'user_id' => $sara->id,       'game_id' => $game3->id]);
        Move::create(['squareX' => 2, 'squareY' => 2, 'user_id' => $pike->id,       'game_id' => $game3->id]);
        Move::create(['squareX' => 2, 'squareY' => 1, 'user_id' => $sara->id,       'game_id' => $game3->id]);
        Move::create(['squareX' => 0, 'squareY' => 2, 'user_id' => $pike->id,       'game_id' => $game3->id]);
        Move::create(['squareX' => 1, 'squareY' => 1, 'user_id' => $sara->id,       'game_id' => $game3->id]);
        Move::create(['squareX' => 1, 'squareY' => 2, 'user_id' => $pike->id,       'game_id' => $game3->id]);
    }
}
