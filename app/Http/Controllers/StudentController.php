<?php 

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController {

    public function index()
    {
        // Eloquent
        $students = Student::all();
        return view('index', compact('students'));
        // die and dump
    } 
}