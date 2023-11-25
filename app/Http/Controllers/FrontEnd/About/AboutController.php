<?php

namespace App\Http\Controllers\FrontEnd\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutIndex(){
        return view('FrontEnd.secondaryLayout.about.about');
    }
}
