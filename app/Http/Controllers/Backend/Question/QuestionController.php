<?php

namespace App\Http\Controllers\Backend\Question;

use App\Models\Subject;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\QuestionDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Mockery\Matcher\Subset;

class QuestionController extends Controller
{
    /*
     *** ADD SUBJECT **
    */
    public function addSubject(){
        $semester = Semester::all();
        return view('Admin.Question.addsubject',compact('semester'));
    }
    /*
     *** INSERT SUBJECT **
    */
    public function insertSubject(Request $request){
        $request->validate([
            'semester' => 'required',
            'subject_name' => 'required|unique:subjects|max:50',
        ]);
        $subjectData = new Subject();
        $subjectData->semester_id  = $request->semester;
        $subjectData->author  = Auth::user()->name;
        $subjectData->subject_name = $request->subject_name;
        $subjectData->save();
        return redirect()->route('subject.list')->with('success','new subject inserted');
    }
    /*
     *** SUBJECT LIST
    */
    public function subjectList(){
        $subjectList = Subject::with('semester')->latest()->get();
        return view('Admin.Question.subjectlist',compact('subjectList'));
    }
    /*
      *** SEARCH QUESTION LIST 
    */
    public function searchQuesiontList(Request $request){

        

        if($request->search){
            
            $searchResult = Subject::where('subject_name','LIKE','%'. $request->search . '%')->latest()->select('id')->get();
            $detailsInfo = QuestionDetails::with('subject')->whereIn('subject_id', $searchResult)->get();
            
            //dd($detailsInfo);
            return view('Admin.Question.qnsSearchList',compact('detailsInfo'));
        }
        else{
            return redirect()->route('subject.list')->with('error','not found anything');
        }
        
    }
    /*
      *** SEARCH SUBJECTS 
    */
    public function searchSubjectList(Request $request){
        if($request->search){
            $searchResult = Subject::with('semester')->where('subject_name','LIKE','%'. $request->search . '%')->latest()->paginate(10);
            return view('Admin.Question.searchlist',compact('searchResult'));
        }else{
            return redirect()->route('subject.list')->with('error','not found anything');
        }
    }
    /*
     *** EDIT PATH SUBJECT
    */
    public function subjectEdit($id){
        $semester = Semester::get();
        $subjects = Subject::find($id);
        return view('Admin.Question.editsubject',compact('semester','subjects'));
    }
    /*
     *** UPDATE SUBJECT
    */
    public function subjectUpdate(Request $request, $id){
        $request->validate([
            'semester' => 'required',
            'subject_name' => 'required|unique:subjects|max:50',
        ]);
        
        $subjectData = Subject::find($id);
        $subjectData->semester_id  = $request->semester;
        $subjectData->subject_name  = $request->subject_name;
        $subjectData->author  = Auth::user()->name;
        $subjectData->save();
        return redirect()->route('subject.list')->with('success','subject updated!');
    }
    
    /*
     * DELETE COST SHEET 
    */
    public function deleteSubject($id){
      DB::table('subjects')->where('id', $id)->delete();
      return redirect()->route('subject.list')->with('error','a subject has been deleted !');
    }
    /*
     *** QUESTION INSERTION **
    */
    public function details(){
        $semester = Semester::get();
        return view('Admin.Question.details',compact('semester'));
    }

    /*
      *** AJAX FOR SUBJECT SELECT 
     */
    public function detailsUpload(Request $request){
        $request->validate([
            'semester' => 'required',
            'subjects' => 'required',
            'sessions' => 'required',
            'pdf_file' => 'required|mimes:pdf', // Validate the file as a PDF and set a maximum file size
        ]);
        
        $detailsData = new QuestionDetails();
        $detailsData->semester_id = $request->semester;
        $detailsData->subject_id  = $request->subjects;
        $detailsData->sessions  = $request->sessions;

            $file = $request->file('pdf_file');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/Questions/', $fileName); // Store the file in the 'pdfs' directory within the storage/app directory
            $detailsData->image =  $fileName;
            
        $detailsData->save();
        return redirect()->route('question.details.list')->with('success','new previous question added !');
    }
    /*
     * DELETE INDIVIDUAL QSN
    */
    public function deleteQsn(Request $request, $id){ 
        $qsnDelet = QuestionDetails::find($id);
        $qsnDelet->delete();
        return redirect()->route('question.details.list')->with('error','A previous Qsn deleted!');
    }
    /*
     * DELETE FULL COLUMN
    */
    public function deleteQsnColumn($id){ 
        $qsnDelet = Subject::find($id);
        $qsnDelet->delete();
        return redirect()->route('question.details.list')->with('error-column','a column deleted');
    }

    /*
     ** QUESTION DETAILS LIST 
    */
    public function detailsList(){
        $details = Subject::with('detailsInfo')->latest()->paginate(10);
        return view('Admin.Question.detailslist',compact('details'));
    }

    /*
     * AJAX FOR SUBJECT SELECT 
     */
    public function selectSubject(Request $request){
       $subject = Subject::where('semester_id',$request->id)->get();
       return json_encode($subject);
      // return $subject;
    }
}