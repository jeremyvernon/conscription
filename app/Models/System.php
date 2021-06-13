<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }

    public function gamesessions()
    {
        return $this->hasMany(GameSession::class);
    }
}
