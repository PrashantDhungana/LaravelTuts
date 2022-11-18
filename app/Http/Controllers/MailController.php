<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index(){
        $data=['name'=>"Vishal",'data'=>"Hello"];
        $user['to']='isharathapa55@gmail.com';
        Mail::send('mail',$data,function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject('Hello Dev');

        });
    
}

}