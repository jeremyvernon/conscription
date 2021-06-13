<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameTable extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    public function gamesessions()
    {
        return $this->hasMany(GameSession::class);
    }

    public function timeslots()
    {
        return $this->hasManyThrough(Timeslot::class, GameSession::class);
    }

}
