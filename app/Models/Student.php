<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = array('name', 'age', 'mobile', 'section');

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_student', "student_id" , "skill_id");
    }

}
