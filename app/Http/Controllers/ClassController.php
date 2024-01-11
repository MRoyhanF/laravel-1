<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        ////lazy loading
        // $class = ClassRoom::all();
        
        //eager loading
        $class = ClassRoom::with('students')->get(); 
        return view('classroom', ['classList' => $class]);
    }
}
