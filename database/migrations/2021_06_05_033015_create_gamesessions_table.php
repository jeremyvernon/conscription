<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamesessions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('gamemaster_id')->constrained();
            $table->foreignId('system_id')->constrained();
            $table->string('title');
            $table->text('description');
            $table->string('content-rating');
            $table->foreignId('preferred_timeslot_1')->constrained('timeslots');
            $table->foreignId('preferred_timeslot_2')->constrained('timeslots');
            $table->foreignId('preferred_timeslot_3')->constrained('timeslots');
            $table->foreignId('timeslot')->constrained('timeslots')->nullable();
            $table->text('status')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamesessions');
    }
}
