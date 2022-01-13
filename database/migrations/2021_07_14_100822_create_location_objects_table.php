<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_objects', function (Blueprint $table) {
            $table->id();
            $table->integer('loc_cat_id');
            $table->string('typeCategory');
            $table->string('type');
            $table->integer('loc_cat_distance_id');
            $table->integer('score_1');
            $table->integer('score_2');
            $table->integer('score_3');
            $table->integer('score_4');
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
        Schema::dropIfExists('location_objects');
    }
}
