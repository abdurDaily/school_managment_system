<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Semester();
        $user->semester = '1st semester';
        $user->save();
        
        $user = new Semester();
        $user->semester = '2nd semester';
        $user->save();
        
        $user = new Semester();
        $user->semester = '3rd semester';
        $user->save();
        
        $user = new Semester();
        $user->semester = '4th semester';
        $user->save();
        
        $user = new Semester();
        $user->semester = '5th semester';
        $user->save();
        
        $user = new Semester();
        $user->semester = '6th semester';
        $user->save();
        
        $user = new Semester();
        $user->semester = '7th semester';
        $user->save();
        
        $user = new Semester();
        $user->semester = '8th semester';
        $user->save();
    }
}