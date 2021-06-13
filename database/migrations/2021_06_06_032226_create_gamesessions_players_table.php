<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesessionsPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamesessions_players', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('player_id')->constrained();
            $table->foreignId('gamesession_id')->constrained();
            $table->text('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamesessions_players');
    }
}
