<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleDefectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psms_vehicle_defects', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('vehicle_1');
            $table->string('vehicle_2');
            $table->string('accident_data_id');
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
		Schema::drop('psms_vehicle_defects');
	}

}
