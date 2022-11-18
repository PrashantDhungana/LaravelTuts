<?php

namespace App\Http\Controllers\User;
use App\Models\Blog;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::all();
       

        return view ('blog.index',compact('blogs'));
    }
     
   
}
