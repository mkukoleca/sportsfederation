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
        Schema::disableForeignKeyConstraints();
        Schema::create('selection', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('category');
            $table->string('history');
            $table->bigInteger('staffTypeId')->unsigned();
            $table->bigInteger('clubId')->unsigned();
            $table->timestamps();

            $table->foreign('staffTypeId')->references('id')->on('staff_types');
            $table->foreign('clubId')->references('id')->on('clubs');
        });
        Schema::enableForeignKeyConstraints();
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
