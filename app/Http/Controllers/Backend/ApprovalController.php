<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
     // APPROVE 
     public function approve(){
        
        $allUsers = User::select('id','email','status')->where('status', 0 )->get();
        return view('Admin.ApprovalLayout.adminApprove',compact('allUsers'));
    }

    public function approveForm(Request $request){
        if($request->approve_id){
           $users =  User::whereIn('id',$request->approve_id)->update(['status'=>1]);
           return redirect()->route('user.approve')->with('success','all request approved!');
        }

    }

    
}