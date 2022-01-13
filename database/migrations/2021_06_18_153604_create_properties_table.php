<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('object_type');
            $table->float('rent_pm');
            $table->float('deposite');
            $table->string('street');
            $table->string('city');
            $table->string('zip_code');
            $table->float('anicallary_cost');
            $table->string('floor');
            $table->text('specification');
            $table->integer('no_of_rooms');
            $table->integer('sqm');
            $table->integer('no_of_kitchens');
            $table->integer('no_of_bathrooms');
            $table->integer('no_of_floor');
            $table->integer('no_of_attic');
            $table->string('commiunity');
            $table->boolean('celler');
            $table->integer('room_keys');
            $table->integer('apartemnt_keys');
            $table->integer('front_keys');
            $table->integer('celler_key');
            $table->integer('attic_key');
            $table->integer('post_key');
            $table->string('other_key');
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
        Schema::dropIfExists('properties');
    }
}
