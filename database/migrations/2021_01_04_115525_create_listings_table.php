<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('area_id')->nullable();
            $table->integer('city_id')->nullable();

            $table->string('ref')->unique()->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();

            $table->string('en_title')->nullable();
            $table->string('fr_title')->nullable();
            $table->string('es_title')->nullable();
            $table->string('ar_title')->nullable();
            $table->string('en_slug')->nullable();
            $table->string('fr_slug')->nullable();
            $table->string('es_slug')->nullable();
            $table->string('ar_slug')->nullable();


            $table->text('en_desc')->nullable();
            $table->text('fr_desc')->nullable();
            $table->text('es_desc')->nullable();
            $table->text('ar_desc')->nullable();

            $table->text('en_more_info')->nullable();
            $table->text('fr_more_info')->nullable();
            $table->text('es_more_info')->nullable();
            $table->text('ar_more_info')->nullable();

            $table->enum('status',[0,1])->default(0);

            $table->string('reference')->nullable();

            $table->string('price')->nullable();

            $table->string('type_listing')->nullable();


            $table->string('space')->nullable();
            $table->string('measure')->nullable();

            $table->text('images')->nullable();



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
        Schema::dropIfExists('listings');
    }
}
