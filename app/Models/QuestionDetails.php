<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionDetails extends Model
{
    use HasFactory;
    /*
      *** RELATION BETWEEN QUESTION DETAILS AND SEMESTER
    */
    public function semester(){
        return $this->belongsTo(Semester::class);
    }
    /*
      *** RELATION BETWEEN QUESTION DETAILS AND SUBJECTS 
    */
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}