<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semester extends Model
{
    use HasFactory;

    /*
      *** RELATION BETWWEN SEMESTE AND SUBJECTS 
    */

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    
    /*
      *** RELATION BETEWEN SEMESTER AND QUESTION DETAILS 
    */
    public function qsnDetails(){
        return $this->hasMany(QuestionDetails::class);
    }
}