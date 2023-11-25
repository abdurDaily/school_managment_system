<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    public function SubBlog(){
        return $this->hasMany(BlogSubCategory::class,'blog_categorie_id');
    }
}