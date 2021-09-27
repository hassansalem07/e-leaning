<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

    protected $table = 'quizzes';
    public $timestamps = true;
    protected $fillable = array('name', 'marks', 'student_id');

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
