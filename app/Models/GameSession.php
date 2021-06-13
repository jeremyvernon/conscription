<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSession extends Model
{
    use HasFactory;

    public function timeslot()
    {
        return $this->belongsTo(Timeslot::class);
    }

    public function gametable()
    {
        return $this->belongsTo(GameTable::class);
    }
    
    public function gamemaster()
    {
        return $this->belongsTo(GameMaster::class);
    }

    public function players() 
    {
        return $this->hasMany(Player::class);
    }

    public function system()
    {
        return $this->belongsTo(System::class);
    }
}
