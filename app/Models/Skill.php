<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    protected $table = 'skills';
    public $timestamps = true;
    protected $fillable = array('name');

    public function students()
    {
        return $this->belongsToMany(Student::class, 'skill_student', "skill_id", "student_id" );
    }

}
