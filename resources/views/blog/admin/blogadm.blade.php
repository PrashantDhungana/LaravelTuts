
@extends('blog.layout.layouts')

@section('content')

@if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

<div class="text-center">
        <div class="bg-info text-white p-3 display-6">Blog</div>
    <table class="table table-bordered table-striped">
    
        <thead class="bg-dark text-white p-2">
            <th >Title</th>
            <th >Image</th>
            <th >Body</th>
            <th >Author</th>
            <th >Actions</th>
        </thead>
        <tbody>
    @foreach($blogs as $blog)
   
    <tr >
        <td >{{$blog->title}}</td>
        
        <td><img 
                @if ($blog->image)
                src="
                /images/{{ $blog->image }}
                "
                @endif
                 height="50" width="50" alt="an image">
         </td>
        <td >{{$blog->body}}</td>
        <td >{{$blog->author_name}}</td>

   
        <td>
        <div class="d-flex">
            <a href="/blog/{{$blog->id}}" class="btn btn-info">Show</a>
        <a href="/blog/{{$blog->id}}/edit" class="btn btn-success ">Edit</a>
        
            <form action="/blog/{{$blog->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger ml-1 " type="submit" >Delete</button>
                    </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection