<?php

namespace Database\Seeders;

use App\Models\AdmitStudent;
use App\Models\BatchNumber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdmitStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add_std = new AdmitStudent();
        $add_std->std_name = 'md abdur rahman';
        $add_std->std_id = 'T-191060';
        $add_std->batch_number = 1;
        $add_std->save();
        
        
        $add_std = new AdmitStudent();
        $add_std->std_name = 'aminul islam';
        $add_std->std_id = 'T-191062';
        $add_std->batch_number = 1;
        $add_std->save();
        
        
        $add_std = new AdmitStudent();
        $add_std->std_name = 'md golam rabbani';
        $add_std->std_id = 'T-191069';
        $add_std->batch_number = 1;
        $add_std->save();
        
        $add_std = new AdmitStudent();
        $add_std->std_name = 'sifat ullah';
        $add_std->std_id = 'T-191041';
        $add_std->batch_number = 1;
        $add_std->save();
        
        
        $add_std = new AdmitStudent();
        $add_std->std_name = 'md al-amin';
        $add_std->std_id = 'T-191056';
        $add_std->batch_number = 1;
        $add_std->save();
        
        
        $add_std = new AdmitStudent();
        $add_std->std_name = 'md yousuf pathan';
        $add_std->std_id = 'T-191046';
        $add_std->batch_number = 1;
        $add_std->save();
        
        
        $add_std = new AdmitStudent();
        $add_std->std_name = 'md maheraz hossen';
        $add_std->std_id = 'T-191059';
        $add_std->batch_number = 1;
        $add_std->save();
        
        
        
    }
}