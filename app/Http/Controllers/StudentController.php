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
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone_no = $request->phone_no;

        if($student->save()){
            echo 'We have submitted the form Successfully';
        }
        else{
            echo ' Erroor';
        }

        
        




    }

    public function edit($id){
        $student = Student::find($id);
        return view('edit', compact('student'));

    }

    public function update(Request $request , $id){

        $student = Student::where('id', $id)->firstorFail();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone_no = $request->phone_no;

        if($student->save()){
            echo "Updated Sucessfully";
        }
        else
        echo "error";
        // dd($request->all());

    }
    public function show($id){
        $student = Student::find($id);
        // dd($student);
        return view('show', compact('student'));



    }
  






}