<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('en_city')->nullable();
            $table->string('en_city_slug')->nullable();
            $table->string('fr_city')->nullable();
            $table->string('fr_city_slug')->nullable();
            $table->string('es_city')->nullable();
            $table->string('es_city_slug')->nullable();
            $table->string('ar_city')->nullable();
            $table->string('ar_city_slug')->nullable();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('cities');
    }
}
