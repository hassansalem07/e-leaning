<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('sub_categories', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('quizzes', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('skill_student', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('skill_student', function(Blueprint $table) {
			$table->foreign('skill_id')->references('id')->on('skills')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('sub_categories', function(Blueprint $table) {
			$table->dropForeign('sub_categories_category_id_foreign');
		});
		Schema::table('quizzes', function(Blueprint $table) {
			$table->dropForeign('quizzes_student_id_foreign');
		});
		Schema::table('skill_student', function(Blueprint $table) {
			$table->dropForeign('skill_student_student_id_foreign');
		});
		Schema::table('skill_student', function(Blueprint $table) {
			$table->dropForeign('skill_student_skill_id_foreign');
		});
	}
}