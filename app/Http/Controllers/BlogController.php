<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
   // view blog
   public function index(){
    $blogs=Blog::all();
   return view('blog.admin.blogadm',compact('blogs'));
   }

   public function create(){
      return view ('blog.admin.create');
   }

   public function store(Request $request){
      $blog=new Blog();
      if ($request->file('image'))
      {
         
         
          $file=$request->file('image');
          $filename=uniqid().Str::random(10).'.'.$file->getClientOriginalExtension();
          $blog->image   = $filename;
          $file-> move(public_path('/images'), $filename);
       }
      
      $blog->title=$request->title;
      $blog->image=$filename;
      $blog->body=$request->body;
      $blog->slug=Str::slug($request->title);
      $blog->author_name=$request->author_name;

      if($blog->save()){
         // echo "Successfully created.";
      // return view('blog.admin.blogadm');
      return redirect('/blog')->with('success','Blog uploaded successfully.');
      }
      else{
         return redirect('/blog')->with('Error','Error to upload');
      }
   }

   public function show($id){
      $blog=blog::find($id);
      return view('blog.admin.show',compact('blog'));
     }

   public function edit($id){
      $blog=blog::find($id);
      return view('blog.admin.edit',compact('blog'));
     }
     public function update(Request $request,$id)
     {
         
        
         $blog=blog:: where ('id',$id)->firstorfail();
         if ($request->file('image'))
         {
             $file=$request->file('image');
             $filename=uniqid().Str::random(10).'.'.$file->getClientOriginalExtension(); // wrghoergheor
             $file-> move(public_path('/images'), $filename);
         }
            
         $blog->image = $filename;
         $blog->title=$request->title;
         $blog->body=$request->body;
         $blog->slug=Str::slug($request->slug);
         
         $blog->author_name=$request->author_name;
          if($blog->save()){
            return redirect('/blog')->with('success','Blog updated successfully.');
          }
          else{
            return redirect('/blog')->with('Error','Error to update');

          }
 
     }
     
//      public function show($id){
//          $blog=blog::find($id);
//          return view('blog.admin.show', compact ('blog'));
//   }
 
      public function destroy($id)
     {
         $blog = blog::find($id);
         if($blog->delete())
         {
            return redirect('/blog')->with('success','Blog deleted successfully.');

         }
         else{

            
            return redirect('/blog')->with('Error','Blog deleted successfully.');
         }     
 
     }
 }

