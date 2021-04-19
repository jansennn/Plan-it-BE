<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutePerjalananPerDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rute_perjalanan_per_days', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('destination_id');
            $table->timestamps();

            $table->foreign('day_id')->references('id')->on('days');
            $table->foreign('destination_id')->references('id')->on('destinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rute_perjalanan_per_days');
    }
}
