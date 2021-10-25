<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Move;
use App\Models\User;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['playerX', 'playerO', 'current_player', 'game_over', 'board'];

    // relationships
    public function moves()
    {
        return $this->hasMany(Move::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
