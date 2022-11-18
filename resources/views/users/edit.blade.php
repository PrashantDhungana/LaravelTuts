<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="/css/index.css" rel="stylesheet"> -->
</head>
<body>
@extends ('users.layout')
    @section('content')
    
<div class="container">
                    
                   <form action="{{route('user.update',$user->id)}}" method="post" class="pt-5 rem" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                   <div class="row">
                         <h1 class="text-center">Fill up the form</h1>
                    </div>
                    <div class="text-center p-3">
                    <div class="row  ">
                         <div class=" form-group form-control-lg ">
                            <input type="text" name="name" value="{{$user->name}}" placeholder="name" class="rounded-pill">
                          </div>
                        </div>
                    <div class="row">
                         <div class=" form-group form-control-lg ">
                            <input type="text" name="username" value="{{$user->username}}" placeholder="username" class="rounded-pill">
                        </div>
                        </div> 
                       
                        <div class="row">
                         <div class=" form-group form-control-lg ">
                             <input type="password" name="password" value="{{$user->password}}" placeholder="password" class="rounded-pill">
                         </div> 
                         </div>
                         <div class="row">
                         <div class=" form-group form-control-lg ">
                             <input type="password" name="c_password" value="{{$user->cpassword}}" placeholder="confirm password" class="rounded-pill">
                         </div> 
                        </div>
                        <div class="row">
                         <div class=" d-flex justify-content-center ">
                         <i class="icon fa-regular fa-image fa-lg"></i>
                             <input type="text" name="slug" value="{{$user->slug}}" placeholder="Slug" class="form-control p-4 m-2">
                         </div> 
                    </div>
                        <div class="row">
                         <div class="form-group form-control-lg " >
                            @if($user->avatar)
                            <img src="/images/{{ $user->avatar}}" alt="" style="width: 18rem;">
                             @else
                                No Image Found !
                             @endif
                            <input type="file" name="profile">
                         </div> 
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-lg btn-primary" name="submit">Submit</button>
                        </div>
                        </div>
                    </div>
            </form>
        </div>
        @endsection
    </body>
    </html>
    
    
                        
