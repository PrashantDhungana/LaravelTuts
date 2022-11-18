<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(){
        $users=User::whereDate("created_at",today())->get();
        return view('users.index',compact ('users'));
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request){
        // dd($request->all());
         
       
  
$request->validate([
    'username'=>['required','max:30','min:3','regex:/^[a-zA-ZÑñ\s]+$/'],
    'name'=>['required','max:30','min:3'],
    
    'password'=>['required'],
    'profile'=>['mimes:jpg'],
    'c_password'=>['required','same:password'],
    
],[
    'profile'=>['mimes:jpg']
]);

$user=new user();
    if ($request->file('profile'))
    {
        $file=$request->file('profile');
        $filename=uniqid().Str::random(10).'.'.$file->getClientOriginalExtension();
        $user->avatar   = $filename;
        $file-> move(public_path('/images'), $filename);
     }
        $user->name = $request->name;
        $user->username = $request->username;
        $user->slug="test";
        $user->password = hash::make($request->password);
        $user->cpassword = hash::make($request->c_password);
        if($user->save()){
            return redirect ('/user')->with('Success','Sucessfully inserted');
        }
        else{
            return redirect('/user')->with('Error','There was an error.');
        }
 }

     public function edit($id){
     $user=User::find($id);
     return view('users.edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        
        // dd($request->file('profile'));
        $user=User:: where ('id',$id)->firstorfail();
        if ($request->file('profile'))
        {
            $file=$request->file('profile');
            $filename=uniqid().Str::random(10).'.'.$file->getClientOriginalExtension(); // wrghoergheor
            $file-> move(public_path('/images'), $filename);
            $user->avatar  = $filename;
        }

        $user->username=$request->username;
        $user->password=$request->password;
        $user->cpassword = hash::make($request->c_password);
         if($user->save()){
            return redirect('/user')->with('success','Updated sucessfully');
         }
         else{
            return redirect('/user')->with('Error','There was an error.');
         }

    }
    
    public function show($id){
        $user=User::find($id);
        return view('users.show', compact ('user'));
 }

     public function destroy($id)
    {
        $user = User::find($id);
        if($user->delete())
        {
            return redirect('/user')->with('success', 'Record deleted successfully');
        }
        else    
            return redirect('/user')->with('error', 'There was an error deleting the record.');

    }
}
