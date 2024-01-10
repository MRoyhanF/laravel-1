<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'Aiu', 'gender' => 'P', 'nis' => '0101001', 'class_id' => 2],
        //     ['name' => 'Budi', 'gender' => 'L', 'nis' => '0101002', 'class_id' => 2],
        //     ['name' => 'Siti', 'gender' => 'P', 'nis' => '0101003', 'class_id' => 1],
        //     ['name' => 'Tono', 'gender' => 'L', 'nis' => '0101004', 'class_id' => 1]
        // ];
        // foreach ($data as $value) {
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nis' => $value['nis'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }

        Student::factory()->count(20)->create();
    }
}
