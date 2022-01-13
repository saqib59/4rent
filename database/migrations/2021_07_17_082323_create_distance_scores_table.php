<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistanceScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distance_scores', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id');
            $table->integer('distance_1');
            $table->integer('distance_2');
            $table->integer('distance_3');
            $table->integer('distance_4');
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
        Schema::dropIfExists('distance_scores');
    }
}
