<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    /*
      *** RELATION BETWEEN SEMESTER AND SUBJECTS 
    */
    public function semester(){
        return $this->belongsTo(Semester::class);
    }
    /*
      *** RELATION BETWEEN SUBJECTS AND QUESTION DETAILS 
    */
    public function detailsInfo(){
        return $this->hasMany(QuestionDetails::class);
    }


    public function attendances(){
      return $this->hasMany(Attendance::class);
  }
}