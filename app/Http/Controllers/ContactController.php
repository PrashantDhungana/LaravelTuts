<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index(){
    $contacts=Contact::all();
    return view('blog.contact.admcontacts',compact('contacts'));

   }

   public function create(){
      return view('blog.create');
    }

    public function store(Request $request){
        $contact=new contact();
        $contact->name =$request->name;
        $contact->email =$request->email;
        $contact->phone_number =$request->phone_number;
        $contact->message =$request->message;

        if($contact->save()){
            echo "Thank you for contacting us.";
        }
        else{
            echo "Error to save.";
        }
    }

    public function edit($id){
        $contact=Contact::find($id);
        return view('blog.contact.edit',compact('contact'));

    }
    
    public function update(Request $request,$id){
       $contact=Contact:: where ('id',$id)->firstorfail();
       $contact->name =$request->name;
       $contact->email =$request->email;
       $contact->phone_number =$request->phone_number;
       $contact->message =$request->message;
       if($contact->save()){
        echo "Successfully updated.";
       }
       else{
        echo "Error to update.";
       }
    }

    public function destroy($id){
        $contact=Contact::find($id);
        if($contact->delete()){
            echo "Successfully deleted.";
        }
        else{
            echo "Error to delete.";
        }
    } 
}
