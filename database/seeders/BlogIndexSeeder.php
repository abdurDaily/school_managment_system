<?php

namespace Database\Seeders;

use App\Models\BlogSubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = new BlogSubCategory();
        $blogs->title = 'IIUC Programming Contest Challenges Developers Worldwide';
        $blogs->slug = 'Programming';
        $blogs->author = 'Abdur Rahman';
        $blogs->image = 'blog_image_1691074702.png';
        $blogs->blog_categorie_id  = 1;
        $blogs->video  = "https://www.youtube.com/watch?v=SyPqRvXY0R4";
        $blogs->blog_details = "I apologize, but as an AI language model, my responses are based on pre-existing knowledge up until September 2021. Therefore, I don't have access to real-time news or specific details about programming contests that have taken place recently. It's always a good idea to check reliable news sources or specialized programming contest platforms for the latest information on programming contests, such as Codeforces, Topcoder, AtCoder, or HackerRank. These platforms often provide updates on upcoming contests, results, and other relevant details.";
        $blogs->save();
    }
}