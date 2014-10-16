<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psms_road_type', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('road_class');
			$table->string('surface_type');
			$table->string('road_structure');
			$table->string('road_status');
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
		Schema::drop('psms_road_type');
	}

}
