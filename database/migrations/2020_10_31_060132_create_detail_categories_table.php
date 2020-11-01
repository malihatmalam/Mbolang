<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_categories', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_destination');
            $table->foreign('id_destination')->references('id')->on('destinations');

            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')->on('categories');

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
        Schema::dropIfExists('detail_categories');
    }
}
