<?php

namespace Database\Seeders;

use App\Models\BatchNumber;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddBatchNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add_batch = new BatchNumber();
        $add_batch->batch_no = "Batch-20-Section-B";
        $add_batch->save();
        
        $add_batch = new BatchNumber();
        $add_batch->batch_no = "Batch-20-Section-A";
        $add_batch->save();
    }
}