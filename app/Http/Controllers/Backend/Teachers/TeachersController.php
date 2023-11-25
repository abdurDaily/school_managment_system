<?php

namespace App\Http\Controllers\Backend\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeachersController extends Controller
{
    /**FACULTY INSERT **/
    public function insert(){
        return view('Admin.Faculty.insert');
    }
    
    /**FACULTY INSERT DATA */
    public function insertData(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'phone' => 'required',
            'email' => 'required',
            'edu_info' => 'required',
        ]);


        $teacherData = new Teacher();  
        if ($request->file('image')) {
            $filePath = $request->image->storeAs('teachers', $request->image->getClientOriginalName(),'public');
            $teacherData->image =  env('APP_URL'). 'storage/' .$filePath;
        }  
        $teacherData->name = $request->name;
        $teacherData->slug = uniqid(Str::slug($request->name));
        $teacherData->designation = $request->designation;
        $teacherData->phone = $request->phone;
        $teacherData->email = $request->email;
        $teacherData->website = $request->website;
        $teacherData->edu_info = $request->edu_info;
        $teacherData->biography = $request->bio;
        $teacherData->research = $request->research;
        $teacherData->teaching_sub = $request->teaching;
        $teacherData->save();
        return back();
    }


    /** TEACHERS LIST */
    public function teachcersList(){
        $allTeachersData = Teacher::all();
        return view('Admin.Faculty.teachersList',compact('allTeachersData'));
    }


    private function imageTrimmer($imgFileName)
    {
        return str($imgFileName)->replace(env('APP_URL') . 'storage/', '')->replace(env('APP_URL') . '/', '');
    }


    public function teachcersListUpdate($id){
       $findTeacher = Teacher::find($id);
    //    dd($findTeacher);
       return view('Admin.Faculty.updateTeacherData', compact('findTeacher'));
    }




    /** TEACHER LIST UPDATE */
    public function teachcersListUpdateData(Request $request, $id) {
        $teacherData = Teacher::find($id);
        // dd($teacherData);

        if ($request->hasFile('image')) {
            $imgName = $this->imageTrimmer($teacherData->image);
            $isExist = Storage::disk('public')->exists($imgName);

            if ($isExist) {
                Storage::disk('public')->delete($imgName);
            }
            $filePath = $request->image->storeAs('teachers', $request->image->getClientOriginalName(), 'public');
            $teacherData->image =  env('APP_URL') . 'storage/' . $filePath;
        }


        $teacherData->name = $request->name;
        $teacherData->slug = uniqid(Str::slug($request->name));
        $teacherData->designation = $request->designation;
        $teacherData->phone = $request->phone;
        $teacherData->email = $request->email;
        $teacherData->website = $request->website;
        $teacherData->edu_info = $request->edu_info;
        $teacherData->biography = $request->bio;
        $teacherData->research = $request->research;
        $teacherData->teaching_sub = $request->teaching;
        $teacherData->save();
        return back();
    }
    
}