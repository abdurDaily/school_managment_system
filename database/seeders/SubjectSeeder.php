<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**1st semester courses start */
        $user = new Subject();
        $user->subject_name = 'UREL-1106	Advanced English';
        $user->author = 'abdur';
        $user->semester_id = '1';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = 'UREM-1101	Text of Ethics and Morality';
        $user->author = 'abdur';
        $user->semester_id = '1';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = 'PHY-1101	Physics I';
        $user->author = 'abdur';
        $user->semester_id = '1';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = 'EEE-1103	Electrical Circuit I DC';
        $user->author = 'abdur';
        $user->semester_id = '1';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = '	EEE-1104	Electrical Circuit I DC Sessional';
        $user->author = 'abdur';
        $user->semester_id = '1';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = '	CE-1108	Engineering Drawing';
        $user->author = 'abdur';
        $user->semester_id = '1';
        $user->save();
        

        /**1st semester courses end */

        /**2ND SEMESTER */
        $user = new Subject();
        $user->subject_name = 'CSE-1221	Computer Fundamentals & Programming';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();

        
        $user = new Subject();
        $user->subject_name = '	CSE-1222	Computer Fundamentals & Programming Sessional';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();
        
        
        $user = new Subject();
        $user->subject_name = '	EEE-1243	Electrical Circuit II AC';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = '	EEE-1244	Electrical Circuit II AC Sessional';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = '	EEE-1245	Basic Electronic';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = 'EEE-1246	Basic Electronic Sessional';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = '	MATH-1207	Mathematics-II (Geometry and Differential Equations)';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = 'PHY-1201	Physics-II';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = '	PHY-1202	Physics-II Sessional';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();
        
        $user = new Subject();
        $user->subject_name = 'URED-1201	Basic Principles of Islam (‘Aqidah+’Ibadah)';
        $user->author = 'abdur';
        $user->semester_id = '2';
        $user->save();

        
        /**2ND SEMESTER END */
    }
}