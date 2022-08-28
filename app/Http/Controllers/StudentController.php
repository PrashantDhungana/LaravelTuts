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

    //Store 2 function :
    // 1. Load form: create()
    // 2. Saves data to db from form : store()

    // 

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){
        
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone_no = $request->phone_no;

        if($student->save()){
            return redirect('/student')->with('success', 'Successfully inserted'); 
        }
        else{
            return redirect('/student')->with('error', 'There was an error'); 
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
        

        if($student->update()){
            return redirect('/student')-> with ('success', 'Successfully edited the Student data with id '); 
        }
        else{
            return redirect('/student')->with('error', 'There was an error while editing the data'); 
        }
        
    }
    public function show($id){

        $student = Student::find($id);
        // dd($student);
        return view('show', compact('student'));



    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if($student->delete())
        {
            return redirect('/student')->with('success', 'Record deleted successfully');
        }
        else    
            return redirect('/student')->with('error', 'There was an error deleting the record.');

    }
  






}