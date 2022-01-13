<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keys', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties') ->onDelete('cascade');;
            $table->boolean('apartment_door');
            $table->boolean('front_door');
            $table->boolean('rooms');
            $table->boolean('celler');
            $table->boolean('attics');
            $table->boolean('post_box');
            $table->text('other');
            $table->integer('no_of_keys');
            $table->text('description');
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
        Schema::dropIfExists('keys');
    }
}
