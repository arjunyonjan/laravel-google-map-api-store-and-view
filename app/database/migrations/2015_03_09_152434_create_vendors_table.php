<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration {

	public function up()
	{	//migration....
		Schema::create('vendors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->double('lat',20,10); //double...
			$table->double('lng',20,10);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('vendors');
	}

}
