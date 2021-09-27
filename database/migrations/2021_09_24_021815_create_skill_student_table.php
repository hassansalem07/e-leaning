<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillStudentTable extends Migration {

	public function up()
	{
		Schema::create('skill_student', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('student_id')->unsigned();
			$table->integer('skill_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('skill_student');
	}
}