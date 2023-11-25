<?php

namespace App\Http\Controllers\FrontEnd\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactIndex() {
      return view('FrontEnd.secondaryLayout.contact.contact');
    }
}
