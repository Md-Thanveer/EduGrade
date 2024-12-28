<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            ['name' => 'Balaji', 'roll_no' => '101', 'email' => 'balaji@school.edu', 'gender' => 'Male', 'dob' => '2001-05-14'],
            ['name' => 'Badri', 'roll_no' => '102', 'email' => 'badri@school.edu', 'gender' => 'Male', 'dob' => '2002-03-22'],
            ['name' => 'Subhasree', 'roll_no' => '103', 'email' => 'subhasree@school.edu', 'gender' => 'Female', 'dob' => '2003-07-09'],
            ['name' => 'Dharsan', 'roll_no' => '104', 'email' => 'dharsan@school.edu', 'gender' => 'Male', 'dob' => '2001-11-25'],
            ['name' => 'Melvin', 'roll_no' => '105', 'email' => 'melvin@school.edu', 'gender' => 'Male', 'dob' => '2002-09-18'],
            ['name' => 'Rajendaran', 'roll_no' => '106', 'email' => 'rajendaran@school.edu', 'gender' => 'Male', 'dob' => '2000-01-30'],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
