<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_systems', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('player_id')->constrained();
            $table->foreignId('system_id')->constrained();
            $table->integer('interest');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players_systems');
    }
}
