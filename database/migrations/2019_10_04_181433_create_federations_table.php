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
            $table->bigIncrements('id');
            $table->string('name');
<<<<<<< HEAD
            $table->string('email');
            $table->string('history');
            $table->string('owner');
            $table->timestamps();

           
=======
            $table->string('description');
            $table->string('history');
            $table->string('owner');
            $table->string('description');
            
            $table->timestamps(); 
>>>>>>> fea1105baa1dc93d12b6c3fbb0ec87ebc98a75d9
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
