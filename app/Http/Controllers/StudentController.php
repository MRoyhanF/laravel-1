<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student', ['studentList' => $student]);

        // // query builder
        // $student = DB::table('students')->get();
        // DB::table('students')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '-274682',
        //     'class_id' => 1
        // ]);

        // DB::table('students')->where('id', 26)->update([
        //     'name' => 'query builder 2',
        //     'class_id' => 3
        // ]);

        // DB::table('students')->where('id', 26)->delete();

        // // eloquent
        // $student = Student ::all();
        // Student::create([
        //     'name' => 'eloquent',
        //         'gender' => 'P',
        //         'nis' => '3274683',
        //         'class_id' => 2
        // ]);
        // Student::find(27)->update([
        //     'name' => 'eloquery 2',
        //     'class_id' => 1
        // ]);
        // Student::find(27)->delete();

        // dd($student);
    }
}
