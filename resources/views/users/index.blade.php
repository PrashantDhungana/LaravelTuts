

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
@extends('users.layout')

@section('content')

@if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
   
   
       <div class="text-center">
        <div class="bg-info text-white p-3">Table</div>
    <table class="table table-bordered table-striped">
    
        <thead class="bg-dark text-white p-2">
            <th >Id</th>
            <th >Name</th>
            <th >Username</th>
            <th >Avatar</th>
            <th >Actions</th>
        </thead>
        <tbody>
    @foreach($users as $user)
    <tr >
        <td >{{$user->id}}</td>
        <td >{{$user->name}}</td>
        <td >{{$user->username}}</td>
         <td><img 
                @if ($user->avatar)
                src="
                /images/{{ $user->avatar }}
                "
                @endif
                 height="50" width="50" alt="an image">
         </td>
         <td>
            <div class="d-flex justify-content-center ">
                 <a href="/user/{{ $user->id }}" class="btn btn-primary mr-3">Show</a>
                    <a href="/user/{{ $user->id }}/edit" class="btn btn-success p-2 mr-3">Edit</a>
                    <form action="/user/{{ $user->id }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger ml-1 " type="submit" >Delete</button>
                    </form>
                </div>
            </td>
        </tr>
@endforeach
</tbody>
</table>
</div> 


  @endsection 
        
    
</body>
</html>
       
              