<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_styles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_traveler');
            $table->foreign('id_traveler')->references('id')->on('travelers');
            
            $table->unsignedBigInteger('id_style');
            $table->foreign('id_style')->references('id')->on('styles');
            
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
        Schema::dropIfExists('detail_styles');
    }
}
