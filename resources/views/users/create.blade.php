


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/css/user.css">
</head>
<body>
@extends('users.layout')

@section('content')  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
               <div class="container">
                  <div class="row  ">
                  
                   <form action="{{route('user.store')}}" method="post" class="pt-5" enctype="multipart/form-data" id="form1" >
                    @csrf
                   <div class="row ">
                         <h1 class=" text-center ">Fill up the form</h1>
                        
                    </div>
                    
                    <div class="row ">
                    
                             <div class="d-flex justify-content-center">
                             <i class="icon fa-solid fa-user fa-lg"></i>
                                 <input type="text" name="name" placeholder="name" id="name" class="form-control p-4 m-2">
                            </div>
                         
                     </div> 
                    <div class="row">
                         <div class="d-flex justify-content-center">
                         <i class="icon fa-regular fa-user fa-lg"></i>
                                <input type="text" name="username" placeholder="Username" id="username" class="form-control p-4 m-2">
                            </div>
                     </div> 
                       
                     <div class="row">
                         <div class="d-flex justify-content-center">
                             <i class="icon fa-solid fa-lock fa-lg"></i>
                                 <input type="password" name="password" placeholder="password" id="pass" class="form-control p-4 m-2" >
                         </div> 
                    </div>

                     <div class="row ">
                         <div class=" d-flex justify-content-center">
                             <i class="icon fa-solid fa-key fa-lg"></i>
                                 <input type="password" name="c_password" placeholder="confirm password" class="form-control p-4 m-2" >
                         </div> 
                    </div>

                     <div class="row">
                         <div class=" d-flex justify-content-center ">
                         <i class="icon fa-regular fa-image fa-lg"></i>
                             <input type="file" name="profile" accept="images/" class="form-control p-4 m-2">
                         </div> 
                    </div>
                   
                

                     <div class="row ">
                         <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-lg btn-info form-control m-2" name="submit">Submit</button>
                        </div>
                     </div>
            </form>
        </div>
    </div>
    
                   

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // $(document).ready(function(){
    //     $.validator.addMethod("StrongPassword",function(value){
    //     return /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);
    // },"Please enter strong password");
  $("#form1").validate({
        rules:{
            name:{
                required: true,
                minlength: 3,
                maxlength:30
            },
            username: {
                required: true,
                 minlength:3,
                 maxlength:30
                
            },
        
         password:{
            required:true,
             StrongPaswword:true

         },
         c_password:{
            required:true,         
                equalTo:'#pass'

     },
     profile:{
        required:true
     }

 },
        messages: {
            name: {
                required: 'This field is required.',
                minlength:'Name must be minimum 3 characters .',
                maxlength:'Name must be maximum length of 30 characters.'
                
            },
            username: {
                required: 'This field is required.',
                minlength:'UserName must be minimum 3 characters .',
                maxlength:'UserName must be maximum length of 30 characters'
            },
            password:{
                required: 'This field is required.'

            },
            profile:{
                required: 'This field is required.'

            }
            
            // c_password{
            //     required:'Confirm password is mandatory.'
            //     equalTo:'This must be matched with password.'

            // }
        }
    });

   
    </script>
  <style>
   
  .error{
    color:red;
    font-size:20px;
    padding-left:100px;
    width:100%;
    margin-top:10px;
  }
  
  </style>   
    
@endsection
    </body>
</html>
