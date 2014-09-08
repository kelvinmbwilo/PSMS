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
            $table->string('type');
            $table->string('make');
            $table->string('color');
            $table->string('plateNo');
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
