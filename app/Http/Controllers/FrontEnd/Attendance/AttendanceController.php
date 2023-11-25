<?php

namespace App\Http\Controllers\Frontend\Attendance;

use App\Models\Subject;
use App\Models\Attendance;
use App\Models\BatchNumber;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function Attendanceindex(){
        $subjectId = Subject::all();
        $batchId = BatchNumber::all();
        return view('FrontEnd.attendance.chekAttendance',compact('subjectId','batchId'));
    }


    // ATTENDANCE 
    public function attendancePdfData(Request $request){
        $batchId = BatchNumber::all();
        $subjectId = Subject::all();

        if($request->batch_id && $request->subject_id){
            $batchWithStudent= BatchNumber::with(["admitStd"=> function($q) use ($request){
                $q->withCount(['myAttendence'=> function($query) use ($request){
                $query->whereHas("attendance", function($query2) use ($request){
                    $query2->where('subject_id', $request->subject_id);
                });

                }]);
            }])->find($request->batch_id);
            
            $students = $batchWithStudent->admitStd;
            $totalAttendence = Attendance::where('subject_id',$request->subject_id)->count();
            
            $SubjectName = Subject::where('id',$request->subject_id)->first();
                                         
        $pdf = Pdf::loadView('FrontEnd.attendance.attendancePdfData',compact('students', 'totalAttendence','subjectId','batchId','SubjectName','batchWithStudent'));
        return $pdf->stream('billing-invoice.pdf');
    }
        $pdf = Pdf::loadView('FrontEnd.attendance.attendancePdfData',compact('subjectId','batchId','SubjectName'));
        return $pdf->stream('billing-invoice.pdf');
    }
}