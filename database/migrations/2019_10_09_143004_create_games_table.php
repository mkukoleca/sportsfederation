<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
        $table->bigIncrements('id'); 
        $table->string('eventId')->unsigned();  
        $table->date('date');
        $table->string('place');
        $table->string('home');
        $table->string('guest');
        $table->string('referee1');
        $table->string('referee2');
        $table->string('delegate');
        $table->integer('round');
        $table->integer('scoresGuest');
        $table->integer('scoresHome');
        $table->string('note');
        $table->timestamps();

        $table->foreign('event_id') -> references('id') -> on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
