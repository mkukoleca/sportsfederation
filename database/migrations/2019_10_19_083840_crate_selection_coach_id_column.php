<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateSelectionCoachIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selection', function (Blueprint $table) {
            $table->renameColumn('staffTypeId', 'coachId');
            $table->dropForeign('selection_staffTypeId_foreign');
            $table->foreign('coachId')->references('id')->on('staffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
