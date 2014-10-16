<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCarTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psms_car', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('type');
            $table->string('registration_number');
            $table->string('make');
            $table->string('color');
            $table->string('plateNo');
            $table->string('YOM');
            $table->string('chassis_number');
            $table->string('owner_fullname');
            $table->string('nationality');
            $table->string('physical_address');
            $table->string('address');
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
        Schema::drop('psms_car');
    }

}
