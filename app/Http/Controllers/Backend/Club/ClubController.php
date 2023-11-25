<?php

namespace App\Http\Controllers\Backend\Club;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    /**INSERT CLUB INFORMATION */
    public function clubInsert(){
        return view('Admin.club.insert');
    }

    
    /**INSERT CLUB DATA */
    public function clubInsertData(Request $request){
        $request->validate([
            'image_upload' => 'required|image|mimes:jpeg,png,jpg,gif',
            'name' => 'required',
            'presedent_name' => 'required',
            'designation' => 'required',
            'fb_profile' => 'required',
        ]);
        $insertData = new Club();
        $filePath = $request->image_upload->storeAs('clubImage', $request->image_upload->getClientOriginalName(),'public');
        $insertData->image =  env('APP_URL'). 'storage/' .$filePath;
        $insertData->club_name = $request->name;
        $insertData->presedent_name = $request->presedent_name;
        $insertData->designation = $request->designation;
        $insertData->fb_profile = $request->fb_profile;
        $insertData->website = $request->website;
        $insertData->save();
        return back()->with('success', 'new club added!');
    }


    /**ALL CLUB LIST  */
    public function clubList(){
        $clubs= Club::all();
        return view('Admin.club.clubList',compact('clubs'));
    }
    

    /** CLUB LIST UPDATE  */
    public function clubListUpdate($id){
        $specificClubList  =  Club::where('id', $id)->first();
        return view('Admin.club.clubListUpdate', compact('specificClubList'));
    }

    /**
     * * IMAGE NAME TRIMMER
     */

     private function imageTrimmer($imgFileName) {
        return str($imgFileName)->replace(env('APP_URL'). 'storage/', '')->replace(env('APP_URL'). '/', '');
     }

    /**(UPDATE DATA) */
    public function clubListUpdateData(Request $request, $id){
        $updateClubData = Club::find($id);
        
        if ($request->hasFile('image_upload')) {
            $imgName = $this->imageTrimmer($updateClubData->image);
            $isExist =   Storage::disk('public')->exists($imgName);
            
            if($isExist){
                Storage::disk('public')->delete($imgName);
            }
            $filePath = $request->image_upload->storeAs('clubImage', $request->image_upload->getClientOriginalName(),'public');
            $updateClubData->image =  env('APP_URL'). 'storage/' .$filePath;

        }
        $updateClubData->club_name = $request->name;
        $updateClubData->presedent_name = $request->presedent_name;
        $updateClubData->designation = $request->designation;
        $updateClubData->fb_profile = $request->fb_profile;
        $updateClubData->website = $request->website;
        $updateClubData->save();
        return back()->with('success', 'new club added!');
    }


    /**CLUB LIST DELETE  */
    public function clubListDelete($id){
       $delete = Club::where('id', $id)->delete();
       return back();
    }
}
