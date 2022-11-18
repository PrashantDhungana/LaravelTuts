<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="/css/  index.css" rel="stylesheet"> -->
</head>
<body>
    <!-- <form action="" method="get" enctype="multipart/form-data">
<div> Hello there, {{$user->username}}</div>
<div>   Name:{{$user->name}}</div>
<div>  Image:{{$user->avatar}}</div>
</form> -->
@extends ('users.layout')

@section('content')
<div class="container ">
    <div class="row">
    <div class=" p-5 col d-flex justify-content-center">
<div class="card " style="width: 18rem;">
  <img class="card-img-top" src="/images/{{$user->avatar}}" alt="Card image cap">
  <div class="card-body bg-secondary">
    <h5 class="card-title">Details</h5>
    <p class="card-text">
        <div class="text-center">Hello there,{{$user->username}}</div>
        <div class="text-center">Name:{{$user->name}}</div>
        
    </p>
    </div>
  </div>
</div>
</div>
</div>
</form>
@endsection
</body>
</html>