<?php

namespace App\Http\Controllers\Frontend\Secondary;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Teacher;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * HOME PAGE START 
     */
    public function index(){
        $allTeachers = Teacher::paginate(8);
        $club = Club::all();
        return view('FrontEnd.secondaryLayout.home.index',compact('allTeachers','club'));
    }



    /**
     * ABOUT PAGE START 
     */
    public function about() {
       return view('FrontEnd.secondaryLayout.about.about');
    }
}
