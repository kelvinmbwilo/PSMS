<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psms_person', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->date('DOB');
            $table->string('physical_address');
            $table->string('address');
            $table->string('national_id/nationality');
            $table->string('phone_number');
            $table->string('drugs/alcohol_percent');
            $table->string('helmet/seat_belt_use');
            $table->string('casualty');
            $table->string('driving_license');
            $table->string('occupation');
            $table->string('status');
            $table->string('vehicle_number');
            $table->integer('accident_data_id');
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
		Schema::drop('psms_person');
	}

}
