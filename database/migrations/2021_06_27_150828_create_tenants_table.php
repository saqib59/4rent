<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->text('first_name');
            $table->text('last_name');
            $table->text('property_id');
            $table->text('nic');
            $table->text('email');
            $table->date('dob');
            $table->integer('property_id');
            $table->date('date_of_move_in');
            $table->date('inspection_date');
            $table->integer('no_of_tenant');
            $table->text('house_number');
            $table->text('recent_city');
            $table->text('zip_code');
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
        Schema::dropIfExists('tenants');
    }
}
