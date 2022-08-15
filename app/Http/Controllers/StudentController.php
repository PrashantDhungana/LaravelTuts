<?php 

namespace App\Http\Controllers;

class StudentController {

    public function test()
    {
        $name = 23;
        return view('welcome', compact('name'));
    } 
}