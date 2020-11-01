<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_traveler');
            $table->foreign('id_traveler')->references('id')->on('travelers');

            $table->unsignedBigInteger('id_destination');
            $table->foreign('id_destination')->references('id')->on('destinations');
            
            $table->unsignedBigInteger('id_rating');
            $table->foreign('id_rating')->references('id')->on('ratings');
            
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
