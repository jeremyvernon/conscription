<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    public function gamesessions() 
    {
        return $this->hasMany(GameSession::class);
    }

    public function gametables()
    {
        return $this->hasManyThrough(GameTables::class, GameSession::class);
    }
}
