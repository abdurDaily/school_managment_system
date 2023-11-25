<?php

namespace App\Http\Controllers\FrontEnd\Courses;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**ALL SUBJECT RECORDS */
    public function courseRecord(){
        $allCourseRecords =  Subject::all();
        return view('FrontEnd.Courses.coursesProfile',compact('allCourseRecords'));
    }
}