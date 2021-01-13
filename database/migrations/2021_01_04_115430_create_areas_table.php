<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('en_area')->nullable();
            $table->string('en_area_slug')->nullable();
            $table->string('fr_area')->nullable();
            $table->string('fr_area_slug')->nullable();
            $table->string('es_area')->nullable();
            $table->string('es_area_slug')->nullable();
            $table->string('ar_area')->nullable();
            $table->string('ar_area_slug')->nullable();
            $table->string('picture')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('city_id')->nullable();
            // delete the city and the area ==> delete in two table
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            // delete the city and set to null the city_id in the area
            // $table->unsignedBigInteger('city_id')->nullable();
            // $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
