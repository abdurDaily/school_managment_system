<?php

namespace App\Http\Controllers\Frontend\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class FrontTeachersController extends Controller
{
    //TEACHERS INDEX 
    public function index(){
        $allInfoTeachers = Teacher::all();
        // dd($allInfoTeachers);
        return view('FrontEnd.Teachers.index',compact('allInfoTeachers'));
    }


    /** FACULTY DETAILS  */
    public function facultyDetails($slug){
        $teacherData = Teacher::where('slug', $slug)->get();
        // dd($teacherData);
        return view('FrontEnd.Teachers.teacherDetails',compact('teacherData'));
    }


   
}