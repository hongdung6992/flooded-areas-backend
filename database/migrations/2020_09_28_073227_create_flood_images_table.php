<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloodImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flood_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('floodplain_id')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->foreign('floodplain_id')->references('id')->on('floodplains')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flood_images');
    }
}
