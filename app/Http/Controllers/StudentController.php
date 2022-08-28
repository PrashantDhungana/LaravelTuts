<?php 

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        $request->validate([
            'profile' => ['mimes:png']
        ],
        [

            'profile.mimes' => "Only accept png"
        ]
    );

        // Store the uploaded img to a folder
        if($request->file('profile'))
        {
            $file= $request->file('profile');
            $filename= uniqid().Str::random(10).'.'.$file->getClientOriginalExtension();
            $file-> move(public_path('/images'), $filename);
        }
        
        
        
        $student = new Student();
        // Store the image name to database
        $student->image = $filename;
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

    public function prashant()
    {
        return "Prashant";
    }
  






}