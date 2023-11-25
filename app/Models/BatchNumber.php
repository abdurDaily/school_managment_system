<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchNumber extends Model
{
    use HasFactory;
    
    //* RELATION BETWEEN BATCH_NO WITH ADMIT_STUDENT TABLE
    public function admitStd(){
        return $this->hasMany(AdmitStudent::class, "batch_number");
    }

    public function Subjects(){
        return $this->hasMany(Subject::class);
    }
}