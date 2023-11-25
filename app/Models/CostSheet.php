<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostSheet extends Model
{
    use HasFactory;
    
    // RELATIONSHIP WITH USER FOR COSTING 
    public function user(){
        return $this->belongsTo(User::class);
    }
}