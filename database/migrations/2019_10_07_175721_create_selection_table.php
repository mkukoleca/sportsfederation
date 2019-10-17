<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selection', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('category');
            $table->string('history');
            $table->integer('staffTypeId');
            $table->bigInteger('clubId')->unsigned();
            $table->timestamps();

            $table->foreign('clubId') -> references('id') -> on('clubs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selection');
    }
}
