<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccidentDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psms_accident_data', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('accident_registration_number');
			$table->integer('driver_id_1');
			$table->integer('driver_id_2');
			$table->integer('car_id_1');
			$table->integer('car_id_2');
			$table->integer('road_type_id');
			$table->integer('damage_id');
			$table->integer('street_condition_id');
			$table->integer('junction_type_id');
			$table->integer('vehicle-defects_id');
			$table->integer('violation_id');
			$table->integer('category_id');
			$table->integer('other_damage_id');
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
		Schema::drop('accident_data');
	}

}
