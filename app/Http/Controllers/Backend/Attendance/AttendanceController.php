<?php

namespace App\Http\Controllers\Backend\Attendance;

use App\Models\Subject;
use Illuminate\Bus\Batch;
use App\Models\Attendance;
use Illuminate\Support\Str;
use App\Models\AdmitStudent;
use App\Models\BatchNumber;
use Illuminate\Http\Request;
use App\Models\AttendanceStore;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Exists;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class AttendanceController extends Controller
{
    //* ADD NEW BATCH 
    public function addNewBatch()
    {
        return view('Admin.Attendance.addNewBatch');
    }

    //* INSERT ADD NEW BATCH INDATABASE  
    public function insertAddNewBatch(Request $request)
    {
        $validated = $request->validate([
            'batch_no' => 'required|unique:batch_numbers,batch_no',
        ]);

        if (BatchNumber::where('batch_no', Str::slug($request->batch_no))->exists()) {
            return redirect()->route('add.new.batch')->withErrors(['batch_no' => 'this batch already tacken']);
        }
        $batchNo = new BatchNumber();
        $batchNo->batch_no = Str::slug($request->batch_no);
        $batchNo->save();
        return back();
    }

    //* ADMIT STUDENTS 
    public function admitStudent()
    {
        $batchNo = BatchNumber::all();
        return view('Admin.Attendance.AdmitStudents', compact('batchNo'));
    }

    //* ADMIT STUDENT IN DATABASE 
    public function admitStudentDatabase(Request $request)
    {
        $admitStudent = new AdmitStudent();
        $admitStudent->std_name = $request->std_name;
        $admitStudent->std_id = $request->std_id;
        $admitStudent->batch_number = $request->batch_no;
        $admitStudent->save();
        return back();
    }

    //* PRESENT STUDENTS 
    public function presentStudents()
    {
        $result = BatchNumber::all();
        $subjectId = Subject::all();
        //dd($subjectId);
        return view('Admin.Attendance.present', compact('result', 'subjectId'));
    }


    public function attendanceRecordCheck(Request $request)
    {
        $subjectId = Subject::all();
        $batchId = BatchNumber::all();
        $query = Attendance::query();

        if ($request->subject_id) {
            $query->where('subject_id', $request->subject_id);
        }
        if ($request->date) {
            $query->where('date', $request->date);
        }
        if ($request->batch_id) {
            $query->where('batch_number_id', $request->batch_id);
        }

        $students = AdmitStudent::where('batch_number', $request->batch_id)->get();
        $atteances = $query->with('attendanceStore')->first();
        $attendedStudetID = $atteances->attendanceStore->pluck('admit_student_id')->toArray();
        return view('Admin.Attendance.record', compact('atteances', 'subjectId', 'batchId', 'students', 'attendedStudetID'));
    }

    public function checkPresent(Request $request)
    {
        $result = BatchNumber::all();
        $subjectId = Subject::all();
        $studentInfo = AdmitStudent::where('batch_number', $request->batch_id)->get();
        return view('Admin.Attendance.present', compact('studentInfo', 'result', 'subjectId'));
    }


    public function submitAttendance(Request $request)
    {

        $test = Attendance::where('batch_number_id', $request->check_id)->where('date', $request->date)->exists();
        if ($test) {
            return back();
            exit();
        }


        $AttendanceRecord = new Attendance();
        $AttendanceRecord->batch_number_id = $request->check_id;
        $AttendanceRecord->date = $request->date;
        $AttendanceRecord->subject_id = $request->subject_id;
        $AttendanceRecord->save();

        foreach ($request->isPresent as $stdId) {
            $allRecords = new AttendanceStore();
            $allRecords->attendance_id = $AttendanceRecord->id;
            $allRecords->admit_student_id  = $stdId;
            $allRecords->save();
        }
        return back();
    }

    public function attendanceRecord(Request $request)
    {

        $subjectId = Subject::all();
        $batchId = BatchNumber::all();
        $query = Attendance::query();

        if ($request->subject_id) {
            $query->where('subject_id', $request->subject_id);
        }
        if ($request->date) {
            $query->where('date', $request->date);
        }
        if ($request->batch_id) {
            $query->where('batch_number_id', $request->batch_id);
        }

        $students = AdmitStudent::where('batch_number', $request->batch_id)->get();
        $atteances = $query->with('attendanceStore')->first();
        $attendedStudetID = $atteances->attendanceStore->pluck('admit_student_id')->toArray();
        return view('Admin.Attendance.record', compact('subjectId', 'batchId', 'students', 'attendedStudetID'));
    }



    /**
     * ALL-ATTENDANCE
     */
    public function allAttendanceRecord(Request $request)
    {

        $batchId = BatchNumber::all();
        $subjectId = Subject::all();

        if ($request->batch_id && $request->subject_id) {
            $batchWithStudent = BatchNumber::with(["admitStd" => function ($q) use ($request) {
                $q->withCount(['myAttendence' => function ($query) use ($request) {
                    $query->whereHas("attendance", function ($query2) use ($request) {
                        $query2->where('subject_id', $request->subject_id);
                    });
                }]);
            }])->find($request->batch_id);

            $students = $batchWithStudent->admitStd;
            // dd($students);
            $totalAttendence = Attendance::where('subject_id', $request->subject_id)->count();

            // dd($students);
            return view('Admin.Attendance.allRecord', compact('students', 'totalAttendence', 'subjectId', 'batchId'));
        }
        return view('Admin.Attendance.allRecord', compact('subjectId', 'batchId'));
    }


    /**ATTENDANCE PDF  */
    public function attendancePdf()
    {
        $batchId = BatchNumber::all();
        $subjectId = Subject::all();
        return view('Admin.Attendance.attendancePdf', compact('batchId', 'subjectId'));
    }

    public function attendancePdfData(Request $request)
    {
        $batchId = BatchNumber::all();
        $subjectId = Subject::all();

        // dd($subjectId);
        if ($request->batch_id && $request->subject_id) {
            $batchWithStudent = BatchNumber::with(["admitStd" => function ($q) use ($request) {
                $q->withCount(['myAttendence' => function ($query) use ($request) {
                    $query->whereHas("attendance", function ($query2) use ($request) {
                        $query2->where('subject_id', $request->subject_id);
                    });
                }]);
            }])->find($request->batch_id);

            // dd($batchWithStudent);
            $students = $batchWithStudent->admitStd;
            $totalAttendence = Attendance::where('subject_id', $request->subject_id)->count();

            $SubjectName = Subject::where('id', $request->subject_id)->first();
            //   dd($SubjectName);


            $pdf = Pdf::loadView('Admin.Attendance.attendancePdfData', compact('students', 'totalAttendence', 'subjectId', 'batchId', 'SubjectName', 'batchWithStudent'));
            return $pdf->stream('billing-invoice.pdf');

            //   return PDF::loadView('Admin.Attendance.attendancePdfData', compact('students', 'totalAttendence','subjectId','batchId'))->setPaper('A4')->setOrientation('portrait')->stream();
        }
        $pdf = Pdf::loadView('Admin.Attendance.attendancePdfData', compact('subjectId', 'batchId', 'SubjectName'));
        return $pdf->stream('billing-invoice.pdf');
    }

    // EDIT ATTANDANCE 
    public function editAttendance(Request $request)
    {
        $oldData = AttendanceStore::where('attendance_id', $request->attendenceId)->delete();
        foreach ($request->present as $stdId) {
            $allRecords = new AttendanceStore();
            $allRecords->attendance_id = $request->attendenceId;
            $allRecords->admit_student_id  = $stdId;
            $allRecords->save();
        }
        return back();
        
    }
}