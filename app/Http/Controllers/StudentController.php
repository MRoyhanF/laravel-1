<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $student = Student::all();  //lazy loading
        $student = Student::with('class')->get(); //eager loading
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


        // collection
        // $nilai = [9,6,5,5,8,14,5,16,10,5,2,1,6,7,2];

        // //php biasa
        // 1. hitung jumlah nilai
        // 2. hitung berapa banyak nilai
        // 3. hitung nilai rata-rata
        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRataRata = $totalNilai / $countNilai;

        // //collection
        // 1. hitung rata-rata nilai
        // $nilaiRataRata = collect($nilai)->avg();

        // // kita akan mencari tau hasil dari nilai dikali 2 dari data2 yuang ada di array $nilai
        // // php biasa
        // $nilaiKaliDua = [];
        // foreach ($nilai as $value) {
        //     array_push($nilaiKaliDua, $value * 2);
        // }
        // dd($nilaiKaliDua);

        // // method map
        // $aaa = collect($nilai)->map(function ($value){
        //     return $value * 2;
        // })->all();
        // dd($aaa);

        // // method filter
        // $aaa = collect($nilai)->filter(function ($value) {
        //     return $value > 7;
        // })->all();
        // dd($aaa);

        // //method contains = cek apakah sebuah array memiliki sesuatu
            // $aa = collect($nilai)->contains(10);
            // $aa = collect($nilai)->contains(function ($value) {
            //     return $value < 6;
            // });
        // dd($aa);

        // //method diff()
        // $resturantA = ["burger", "siomay", "pizza", "spaghetti", "makaroni", "martabak", "bakso"];
        // $resturantB = ["pizza", "friend chicken", "martabak", "sayur asem", "pecel lele", "bakso"];

        // $menuRestoA = collect($resturantA)->diff($resturantB);
        // $menuRestoB = collect($resturantB)->diff($resturantA);

        // dd($menuRestoB);

        // // method pluck
        // $biodata = [
        //     ['nama' => 'budi', 'umur' => 17],
        //     ['nama' => 'anti', 'umur' => 16],
        //     ['nama' => 'siti', 'umur' => 17],
        //     ['nama' => 'rudi', 'umur' => 20],
        // ];

        // $aaaa = collect($biodata)->pluck('nama')->all();
        // dd($aaaa);
    }
}
