<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoinmetSchdualesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinmet_schduales', function (Blueprint $table) {
            $table->id();
            $table->integer('day_number');
            $table->time('time_to');
            $table->time('time_from');
            $table->integer('duration');
            $table->boolean('is_weekend')->default(0);
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
        Schema::dropIfExists('appoinmet_schduales');
    }
}
