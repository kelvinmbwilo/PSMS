<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psms_driver', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('surname');
			$table->string('other_name');
			$table->string('physical_address');
			$table->string('address');
            $table->string('national_id');
			$table->string('phone_number');
			$table->string('gender');
			$table->date('DOB');
			$table->string('nationality');
			$table->string('driving_license');
			$table->string('occupation');
			$table->string('drugs');
			$table->string('alcohol_percent');
			$table->string('phone_use');
			$table->string('helmet/seat_belt_use');
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
		Schema::drop('psms_driver');
	}

}
