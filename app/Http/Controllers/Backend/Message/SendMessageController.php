<?php

namespace App\Http\Controllers\Backend\Message;

use App\Http\Controllers\Controller;
use App\Models\SendMessage;
use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    /**
     * INSERT MESSAGE INTO DB
     */
    public function sendMessage(Request $request){
        
        $messageInsert = new SendMessage();
        $messageInsert->name = $request->name;
        $messageInsert->email = $request->email;
        $messageInsert->department = $request->dept;
        $messageInsert->blood_group = $request->blood_group;
        $messageInsert->message_detail = $request->detail;
        $messageInsert->save();
        return back();
    }
}