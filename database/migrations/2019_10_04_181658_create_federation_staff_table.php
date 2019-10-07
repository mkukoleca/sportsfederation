<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFederationStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('federation_staff', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->BigInteger('federationId')->unsigned();
            $table->BigInteger('staffId')->unsigned();
            $table->BigInteger('staffTypeId')->unsigned();
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
        Schema::dropIfExists('federation_staff');
    }
}
