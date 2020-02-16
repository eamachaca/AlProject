<?php

use App\Models\Semester;
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
        Semester::truncate();

        $semester= new Semester();
        $semester->semester_count=1;
        $semester->description="1er semestre";
        $semester->course_quantities=5;
        $semester->save();


        $semester= new Semester();
        $semester->semester_count=2;
        $semester->description="2do semestre";
        $semester->course_quantities=5;
        $semester->save();

        
        $semester= new Semester();
        $semester->semester_count=3;
        $semester->description="3er semestre";
        $semester->course_quantities=5;
        $semester->save();

        
        $semester= new Semester();
        $semester->semester_count=4;
        $semester->description="4to semestre";
        $semester->course_quantities=5;
        $semester->save();

        
        $semester= new Semester();
        $semester->semester_count=5;
        $semester->description="5to semestre";
        $semester->course_quantities=5;
        $semester->save();

        
        $semester= new Semester();
        $semester->semester_count=6;
        $semester->description="6to semestre";
        $semester->course_quantities=5;
        $semester->save();

        
        $semester= new Semester();
        $semester->semester_count=7;
        $semester->description="7mo semestre";
        $semester->course_quantities=5;
        $semester->save();
        
        
        $semester= new Semester();
        $semester->semester_count=8;
        $semester->description="8tavo semestre";
        $semester->course_quantities=5;
        $semester->save();

        
        $semester= new Semester();
        $semester->semester_count=9;
        $semester->description="9no semestre";
        $semester->course_quantities=5;
        $semester->save();

        
        $semester= new Semester();
        $semester->semester_count=10;
        $semester->description="10 semestre";
        $semester->course_quantities=5;
        $semester->save();

        
     



      
    }
}
