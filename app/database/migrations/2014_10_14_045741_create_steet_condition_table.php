<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSteetConditionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psms_street_condition', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('road_surface');
            $table->string('light');
            $table->string('weather');
            $table->string('control');
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
		Schema::drop('psms_street_condition');
	}

}
