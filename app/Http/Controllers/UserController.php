<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = "Nakshatra";
        // Pass values to blade
        return view('welcome', compact('name'));
    }
}
