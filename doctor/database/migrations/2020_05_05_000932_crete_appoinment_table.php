<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteAppoinmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Appointment', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email')->nullable();
            $table->text('phone');
            $table->date('date');
            $table->time('time_to');
            $table->time('time_from');
            $table->boolean('approved')->default('0');
            $table->boolean('status')->default('0');
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
        Schema::dropIfExists('Appointment');
    }
}
