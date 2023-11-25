<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /** ZAHIDUR RASHID  */
        $teacher = new Teacher();
        $teacher->name = 'Engr. Syed Zahidur Rashid';
        $teacher->slug = uniqid(Str::slug('Syed-Zahidur-Rashid'));
        $teacher->designation = 'Assistant Professor & Chairman';
        $teacher->phone = '+8802334461900';
        $teacher->email = 'szrashidcce@yahoo.com';
        $teacher->image = asset('teachers/3.png');
        $teacher->website = 'https://www.facebook.com/szrashid';
        $teacher->edu_info = '<ul>
        <li>M.Sc. in Computer Science and Engineering</li>
        <li>Major in Advanced Optical Communication Systems and Networks</li>
        <li>B.Sc. in Computer and Communication Engineering</li>
        <li>H.S.C. Science, Chittagong College</li>
      </ul>';
        $teacher->biography = ''; 
        $teacher->research = '<ul>
        <li>Wireless and Mobile Networks</li>
        <li>IoT and M2M Communications</li>
        <li>Optical Networks</li>
        <li>Computer Networks</li>
        <li>Antenna Technology</li>
        <li>RF and Microwave</li>
        <li>Network Security</li>
        <li>Deep Learning</li>
      </ul>'; 
      $teacher->teaching_sub = '<ul>
      <li>Computer Networks</li>
      </ul>';
      $teacher->save();

      
      

      
      /**Dr. Saif Hannan */
      $teacher = new Teacher();
        $teacher->name = 'Dr. Saif Hannan';
        $teacher->slug = uniqid(Str::slug('Dr. Saif Hannan'));
        $teacher->designation = 'Assistant Professor';
        $teacher->phone = '01325664893';
        $teacher->email = 'saifhannan@yahoo.com';
        $teacher->image = asset('teachers/1.png');
        $teacher->website = 'https://ieeexplore.ieee.org/author/37086000613';
        $teacher->edu_info = '<ul>
        <li> Ph.D. in Electrical, Electronic and Systems Engineering from Universiti Kebangsaan Malaysia (UKM), Malaysia.</li>
        <li>M.S. in Physics from SUST, Bangladesh.</li>
        <li>B.Sc. in Physics from SUST, Bangladesh.</li>
        <li>H.S.C. Science, Fauzdarhat Cadet College Primary School</li>
      </ul>'; 
        $teacher->biography = 'Assalamu alaikum, everyone!
        I am Dr. Saif Hannan, Assistant Professor in the Department of Electronic and Telecommunication Engineering (ETE) at the International Islamic University Chittagong (IIUC), Bangladesh.
        I teach physics, electromagnetic fields and waves, and other relevant courses in the ETE dept.
        I do research mainly on metamaterial absorbers, sensors and antennas. I supervise thesis students and like to publish in reputed journals.'; 
        $teacher->research = '<ul>
        <li>
            <a target="_blank" target="_blank" href="https://ieeexplore.ieee.org/author/37086000613">IEEE Xplore</a>
        </li>
        
        <li>
            <a target="_blank" href="https://www.researchgate.net/profile/Saif-Hannan">Research Gate</a>
        </li>
        <li>
            <a target="_blank" href="https://orcid.org/0000-0002-9026-4370">ORCID</a>
        </li>
        <li>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57193697914">Scopus</a>
        </li>
        <li>
            <a target="_blank" href="https://publons.com/wos-op/researcher/3326233/saif-hannan/">Web of Science</a>
        </li>
    </ul>'; 
      $teacher->teaching_sub = '<ol>
      <li>Physics</li>
      <li>Electromagnetic Fields and Waves</li>
      <li>Digital Logic Gates</li>
      <li>Electronic Devices</li>
  </ol>';
      $teacher->save();

      
      /**Md IBRAHIM  */
      $teacher = new Teacher();
        $teacher->name = 'Md. Ibrahim';
        $teacher->slug = uniqid(Str::slug('Md. Ibrahim'));
        $teacher->designation = 'Assistant Professor';
        $teacher->phone = '01817750772';
        $teacher->email = 'ibrahim@iiuc.ac.bd';
        $teacher->image = asset('teachers/ibrahim.png');
        $teacher->website = 'https://www.facebook.com/ibrahim.rupom';
        $teacher->edu_info = '<ul>
        <li>B.sc in mathematics | CU | Bangladesh.</li>
      </ul>'; 
        $teacher->biography = 'biography data not inserted...'; 
        $teacher->research = 'research data didn not inserted'; 
          $teacher->teaching_sub = 'teaching subjects not inserted';
      $teacher->save();


      
      /**Md Mostafa Amir Faisal */
      $teacher = new Teacher();
        $teacher->name = 'Md Mostafa Amir Faisal';
        $teacher->slug = uniqid(Str::slug('Md Mostafa Amir Faisal'));
        $teacher->designation = 'Assistant Professor | Proctor';
        $teacher->phone = '01815382718';
        $teacher->email = 'oranta68@yahoo.com';
        $teacher->image = asset('teachers/2.png');
        $teacher->website = 'https://www.facebook.com/md.mostafa.a.faisal';
        $teacher->edu_info = '<ul>
        <li>B.Sc. in EEE | IUT | Bangladesh.</li>
      </ul>'; 
        $teacher->biography = 'biography data not inserted...'; 
        $teacher->research = 'research data didn not inserted'; 
          $teacher->teaching_sub = 'teaching subjects not inserted';
      $teacher->save();
       

      
      /** Engr. Abdul Gafur */
      $teacher = new Teacher();
      $teacher->name = 'Engr. Abdul Gafur';
      $teacher->slug = uniqid(Str::slug('Engr. Abdul Gafur'));
      $teacher->designation = 'Associate Professor';
      $teacher->phone = '+01715866362';
      $teacher->email = ' agafur_cox@yahoo.com';
      $teacher->image = asset('teachers/7.png');
      $teacher->website = 'https://scholar.google.com/citations?hl=en&user=TOeqMr0AAAAJ&view_op=list_works&sortby=pubdate';
      $teacher->edu_info = '<ul>
      <li> M.Sc. in Electrical Engineering (Emphasis on Telecommunications), Blekinge Institute of Technology, Sweden</li>
      <li>Major in Advanced Optical Communication Systems and Networks</li>
      <li> B.Sc. in Computer and Communications Engineering (CCE)</li>
    </ul>';
      $teacher->biography = ''; 
      $teacher->research = '<ol>
      <li>
          <a target="_blank" target="_blank" href="https://scholar.google.com/citations?hl=en&user=TOeqMr0AAAAJ&view_op=list_works&sortby=pubdate">Google Scholar</a>
      </li>
      
      <li>
          <a target="_blank" href="https://www.researchgate.net/profile/Abdul_Gafur6">Research Gate</a>
      </li>
      <li>
          <a target="_blank" href="https://orcid.org/0000-0002-7831-8866">ORCID</a>
      </li>
  </ol>'; 
    $teacher->teaching_sub = '<ul>
    <li>optical fiber communication</li>
    <li>digital signal processing</li>
    </ul>';
    $teacher->save();

    
      /**Mohammed Jashim Uddin */
      $teacher = new Teacher();
        $teacher->name = 'Mohammed Jashim Uddin';
        $teacher->slug = uniqid(Str::slug('Mohammed Jashim Uddin'));
        $teacher->designation = 'Associate Professor';
        $teacher->phone = '01716823959';
        $teacher->email = 'jashim-ete@iiuc.ac.bd';
        $teacher->image = asset('teachers/4.png');
        $teacher->website = 'https://www.facebook.com/profile.php?id=704352024';
        $teacher->edu_info = '<ul>
        <li>B.Sc. in EEE | CUET | Bangladesh.</li>
      </ul>'; 
        $teacher->biography = 'biography data not inserted...'; 
        $teacher->research = '<ol>
        <li>
            <a target="_blank" target="_blank" href="https://scholar.google.com/citations?user=eliQOTEAAAAJ&hl=en">Google Scholar</a>
        </li>
        
        <li>
            <a target="_blank" href="https://www.researchgate.net/profile/Mohammed-Jashim-Uddin/achievement/63846a5aaedf4a14bb39b9eb">Research Gate</a>
        </li>
        <li>
            <a target="_blank" href="https://orcid.org/0000-0002-3928-5897">ORCID</a>
        </li>
        <li>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57204510071">Scopus</a>
        </li>
    </ol>'; 
          $teacher->teaching_sub = '<ol>
          <li>VLSI</li>
          <li>Numerical Analysis</li>
          <li>Electronic Devices</li>
      </ol>';
      $teacher->save();

      
      /**Mohammad Woli Ullah */
      $teacher = new Teacher();
        $teacher->name = 'Mohammad Woli Ullah';
        $teacher->slug = uniqid(Str::slug('Mohammad Woli Ullah'));
        $teacher->designation = 'Assistant Professor';
        $teacher->phone = '01912620655';
        $teacher->email = 'woli@iiuc.ac.bd';
        $teacher->image = asset('teachers/5.png');
        $teacher->website = 'https://www.facebook.com/m.woliullah';
        $teacher->edu_info = '<ul>
        <li>M.Engg. in EEE, Bangladesh.</li>
        <li>B.Sc. in EEE, Bangladesh.</li>
      </ul>'; 
        $teacher->biography = 'biography data not inserted...'; 
        $teacher->research = 'research data didn not inserted'; 
          $teacher->teaching_sub = 'teaching subjects not inserted';
      $teacher->save();
       
      
    }
}