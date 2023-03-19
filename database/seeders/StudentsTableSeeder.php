<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $students = [
            ['student_name' => 'Jone Doe 1', 'student_email' =>'jonedoe1@gmail.com','student_gender'=>'Male', 'student_image'=>''],
            ['student_name' => 'Jone Doe 2', 'student_email' =>'jonedoe2@gmail.com','student_gender'=>'Male', 'student_image'=>''],
            ['student_name' => 'Jone Doe 3', 'student_email' =>'jonedoe3@gmail.com','student_gender'=>'Male', 'student_image'=>'']

        ];
        DB::table('students')->insert($students);
    }
}
