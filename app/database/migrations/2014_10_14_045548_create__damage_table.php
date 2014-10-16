<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDamageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psms_damage', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('vehicle');
			$table->string('vehicle_total');
			$table->string('infrastructure');
			$table->string('rescue_cost');
			$table->string('image_path');
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
		Schema::drop('psms_damage');
	}

}
