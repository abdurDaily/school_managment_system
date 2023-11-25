<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $club = new Club();
        $club->image = asset('assets/club/1.png');
        $club->club_name = 'IIUC Telecom Club';
        $club->presedent_name = 'Engr. Abdul Gafur';
        $club->designation = "presedent";
        $club->fb_profile = "https://www.facebook.com/abdul.gafur.796";
        $club->website = "";
        $club->save();



        
        $club = new Club();
        $club->image = asset('assets/club/2.png');
        $club->club_name = 'IIUC Telecom Club';
        $club->presedent_name = 'Engr. Abdul Gafur';
        $club->designation = "presedent";
        $club->fb_profile = "https://www.facebook.com/abdul.gafur.796";
        $club->website = "";
        $club->save();



        $club = new Club();
        $club->image = asset('assets/club/3.png');
        $club->club_name = 'IIUC Telecom Club';
        $club->presedent_name = 'Engr. Abdul Gafur';
        $club->designation = "presedent";
        $club->fb_profile = "https://www.facebook.com/abdul.gafur.796";
        $club->website = "";
        $club->save();



        $club = new Club();
        $club->image = asset('assets/club/4.png');
        $club->club_name = 'IIUC Telecom Club';
        $club->presedent_name = 'Engr. Abdul Gafur';
        $club->designation = "presedent";
        $club->fb_profile = "https://www.facebook.com/abdul.gafur.796";
        $club->website = "";
        $club->save();




    }
}
