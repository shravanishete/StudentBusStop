<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Stops;




// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
  
    Public function run()
    {
        Student::factory(8)->create();
        Stops::factory(10)->create();

        $students =Student::all();

        foreach($students as $student){
            $student->Stops->attach(
                Stop::inRandomOrder()->take(rand(1, 4))->pluck('id')->toArray()
            );}
                //Stops::inRandomOrder()->take(rand(1, 4)->pluck('id')))};
        }
    
}

