<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('age');
			$table->string('mobile');
			$table->string('section');
		});
	}

	public function down()
	{
		Schema::drop('students');
	}
}