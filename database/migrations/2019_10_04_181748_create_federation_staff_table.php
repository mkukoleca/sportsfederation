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
        Schema::disableForeignKeyConstraints();

        Schema::create('federation_staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fed_id')->unsigned();
            $table->bigInteger('staff_id')->unsigned();
            $table->bigInteger('staff_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('fed_id')->references('id')->on('federations');
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('staff_type_id')->references('id')->on('staff_types');

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
        Schema::dropIfExists('federation_staff');
    }
}
