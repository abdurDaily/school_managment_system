<?php

namespace App\Http\Controllers\Frontend\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersProfileController extends Controller
{
    //TEACHERS PROFILE
    public function teacherProfile() {
       $allTeachers = Teacher::all();
       return view('FrontEnd.secondaryLayout.teachers.teachersIndex', compact('allTeachers'));
    }


    // TEACHER DETAILS 
    public function teacherDetails($slug) {
       $teacherDetails =  Teacher::where('slug', $slug)->first();
    //   dd($teacherDetails);
       return view('FrontEnd.secondaryLayout.teachers.teacherDetails', compact('teacherDetails'));

    }
}
