<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrizesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prizes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->string('type');
			$table->string('prize');
			$table->unique('id');
			$table->unique( array('id', 'date', 'type', 'prize') );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prizes');
	}

}
