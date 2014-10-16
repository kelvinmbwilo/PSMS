<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccidentLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psms_accident_location', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('accident_data_id');
			$table->string('area');
			$table->integer('district_id');
			$table->integer('region_id');
			$table->string('road_name');
			$table->string('road_number');
			$table->string('road_kilometer_mark');
			$table->string('intersection_name');
			$table->string('intersection_number');
			$table->string('intersection_kilometer_mark');
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
		Schema::drop('accident_location');
	}

}
