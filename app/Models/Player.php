<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function gamesessions()
    {
        return $this->belongsToMany(GameSession::class);
    }
    public function systems()
    {
        return $this->belongsToMany(System::class);
    }
}
