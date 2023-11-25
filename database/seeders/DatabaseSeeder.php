<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RoleSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(BlogIndexSeeder::class);
        $this->call(AddBatchNumberSeeder::class);
        $this->call(AdmitStudentsSeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(clubSeeder::class);
        
    }
}