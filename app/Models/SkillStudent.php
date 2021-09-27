<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillStudent extends Model
{

    protected $table = 'skill_student';
    public $timestamps = true;
    protected $fillable = array('student_id', 'skill_id');

}
