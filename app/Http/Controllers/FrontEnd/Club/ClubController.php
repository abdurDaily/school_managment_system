<?php

namespace App\Http\Controllers\Frontend\Club;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function clunIndex(){
        $club = Club::all();
        return view('FrontEnd.secondaryLayout.home.index',compact('club'));
    }
}
