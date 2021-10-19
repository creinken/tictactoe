<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['playerX', 'playerO', 'current_player', 'game_over'];

    // relationships
    public function moves()
    {
        return $this->belongsToMany(Move::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
