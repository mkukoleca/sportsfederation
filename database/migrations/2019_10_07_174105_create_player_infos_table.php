<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('thumbnail');
            $table->string('name');
            $table->string('surname');
            $table->string('description');
            $table->string('position');
            $table->float('height');
            $table->float('weight');
            $table->integer('jerseyNumber');
            $table->date('dateOfBirth');
            $table->string('citizenship');
            $table->string('clubHistory');
            $table->string('currentClub');
            $table->string('selection');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_infos');
    }
}
