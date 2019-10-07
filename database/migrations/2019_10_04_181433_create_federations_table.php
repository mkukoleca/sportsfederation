<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateFederationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('federations', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('description');
            $table->string('name');
            $table->string('email');
            $table->string('history');
            $table->string('owner');
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
        Schema::dropIfExists('federations');
    }
}
