<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psms_users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('rankNo');
            $table->string('fullName');
            $table->string('email');
            $table->string('station');
            $table->integer('RegionId');
            $table->integer('districtId');
            $table->string('password');
            $table->string('remember_token');
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
        Schema::drop('psms_users');
    }

}
