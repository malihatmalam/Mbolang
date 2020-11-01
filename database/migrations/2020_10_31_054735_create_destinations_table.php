<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->string('time');
            $table->string('ticket');
            $table->longText('description')->nullable();
            $table->text('address');
            $table->unsignedBigInteger('city');
            $table->unsignedBigInteger('province');
            $table->unsignedBigInteger('country');
            $table->double('latitude',10,7);
            $table->double('longitude',10,7 );
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
        Schema::dropIfExists('destinations');
    }
}
