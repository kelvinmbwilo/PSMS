<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateLicenceTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psms_licence', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('licenceNo');
            $table->string('address');
            $table->string('class');
            $table->string('expiryDate');
            $table->string('status');
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
        Schema::drop('psms_licence');
    }

}
