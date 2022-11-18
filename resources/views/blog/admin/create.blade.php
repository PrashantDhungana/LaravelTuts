@extends('blog.layout.layouts')

@section('title')
Create a new blog
@endsection

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
    <div class="row p-5">
<form  method="post" name="login" action="{{ route('blog.store') }}" enctype="multipart/form-data">
    @csrf
    <div class=" input-group"> 
        <Label>Title of the blog
         <div class="">
             <input type="text" placeholder="title" name="title" id="title" class="form-control ">
        </div>
    </div>
    <div class=" input-group ">
        <Label>Slug
         <div class="">
             <input type="text" placeholder="slug" name="slug" id="title" class="form-control ">
        </div>
    </div>
    <div class=" input-group">
         <Label class="">Image 
            <div>
                <input type="file" placeholder="image" name="image" id="image" accept="image/*" class="form-control my-input">
            </div>
    </div>
    <div class="input-group">
        <Label class="">Body
             <div>
                <textarea id="txtid" placeholder="body" name="body" id="title" class="form-control" ></textarea>
            </div>
        </div>
    <div class="input-group ">
        <Label class="">Author
            <div>
                <input type="text" placeholder="author name" name="author_name" id="author" class="form-control">
            </div>
    </div>
    <div class="text-center ">
            <button type="submit" class=" btn btn-block btn-success unit tx-tfm form-control">Submit</button>
    </div>
 </div>
</div>
@endsection