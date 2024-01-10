<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $student = Student::all();
        // return view('student', ['studentList' => $student]);

        // // query builder
        // $student = DB::table('students')->get();
        // DB::table('students')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '-274682',
        //     'class_id' => 1
        // ]);

        // // eloquent
        // $student = Student ::all();
        Student::create([
            'name' => 'eloquent',
                'gender' => 'P',
                'nis' => '3274683',
                'class_id' => 2
        ]);

        // dd($student);
    }
}
