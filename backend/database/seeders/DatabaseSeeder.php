<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        $password = bcrypt('password');
        // create fake users
        $reinken =  User::create(['username' => 'Silver84',     'email' => 'dragonlord26.cr@gmail.com', 'email_verified_at' => now(), 'password' => $password, 'remember_token' => Str::random(10)]);
        $pike =     User::create(['username' => 'Piker',        'email' => 'Piker@gmail.com',           'email_verified_at' => now(), 'password' => $password, 'remember_token' => Str::random(10)]);
        $sara =     User::create(['username' => 'Seppens',      'email' => 'seppens17@gmail.com',       'email_verified_at' => now(), 'password' => $password, 'remember_token' => Str::random(10)]);
        $rich =     User::create(['username' => 'Rmarshall',    'email' => 'Rmarshall@gmail.com',       'email_verified_at' => now(), 'password' => $password, 'remember_token' => Str::random(10)]);
        User::factory(10)->create();

        // create dummy games
        $game1 = new Game;
        $game2 = new Game;
        $game3 = new Game;
        $game1->playerX = $reinken->id;
        $game1->playerO = $pike->id;
        $game1->current_player = $pike->id;
        $game1->game_over = true;
        $game1->board = json_encode([['O','X','O'],['X','O','X'],['O','','X']]);
        $game2->playerX = $reinken->id;
        $game2->playerO = $sara->id;
        $game2->current_player = $sara->id;
        $game2->game_over = true;
        $game2->board = json_encode([['O','X','O'],['X','O','X'],['O','','X']]);
        $game3->playerX = $pike->id;
        $game3->playerO = $sara->id;
        $game3->current_player = $pike->id;
        $game3->game_over = true;
        $game3->board = json_encode([['','','X'],['O','O','X'],['X','O','X']]);
        $game1->save();
        $game2->save();
        $game3->save();
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
