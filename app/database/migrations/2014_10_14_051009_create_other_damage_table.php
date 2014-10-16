<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherDamageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psms_other_damage', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('description');
            $table->string('name_of_property_owner');
            $table->string('cost_of_repair');
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
		Schema::drop('psms_other_damage');
	}

}
