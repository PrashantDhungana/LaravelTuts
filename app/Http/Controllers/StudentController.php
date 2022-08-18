<?php 

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController {

    public function index()
    {
        // Eloquent
        $students = Student::all();
        return view('index', compact('students'));
        // die and dump
    } 
    public function store(Request $request){
        // dd($request->all());
        $student = new Student();
        $student->Name = $request->name;
        $student->Address = $request->address;
        if($student->save()){
            echo 'We have submitted the form Successfully';
        }
        else{
            echo ' Erroor';
        }
        
        




    }
}