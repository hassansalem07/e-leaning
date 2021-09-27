<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuizzesTable extends Migration {

	public function up()
	{
		Schema::create('quizzes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('marks');
			$table->integer('student_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('quizzes');
	}
}