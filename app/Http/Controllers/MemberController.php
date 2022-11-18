<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    Function index(){
       return Member::find(2)->companyData; //When we put function name of model then it will get member-id too 
        }
        //When we put find(2) and place the member id of both two if there is hasmany relation then it will return both of them .
}
