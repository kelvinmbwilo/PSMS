<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateDataTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psms_data', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('offence');
            $table->string('plateNumber');
            $table->string('rankNo');
            $table->string('license');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('commit');
            $table->string('amount');
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
        Schema::drop('psms_data');
    }

}
