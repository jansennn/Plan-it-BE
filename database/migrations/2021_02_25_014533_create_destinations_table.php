<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kabupaten_id');
            $table->unsignedBigInteger('category_wisata_id');
            $table->string('name');
            $table->string('address');
            $table->decimal('rating');
            $table->string('lat');
            $table->string('long');
            $table->string('image', 255);
            $table->string('opening_hours');
            $table->string('closed_hours');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('kabupaten_id')->references('id')->on('kabupatens');
            $table->foreign('category_wisata_id')->references('id')->on('category_wisatas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
}
