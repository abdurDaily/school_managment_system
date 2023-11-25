<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Abdur Rahman';
        $user->email = 'rahmansohel155@gmail.com';
        $user->password = Hash::make('password');
        $user->status = 1;
        $user->save();
        
        $user->assignRole('admin');
    }
}