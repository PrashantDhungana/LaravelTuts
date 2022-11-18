@extends('blog.layout.layouts')

@section('title')
Show
@endsection

@section('content')

<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <h1 class="card-title">{{$blog->title}}</h1>
      <img @if($blog->image)
    src="/images/{{$blog->image}}"
    @endif
    alt="image" class="card-img-top" height="50" width="50" >
      <div class="card-body">
        <p class="card-text">{{$blog->body}}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">{{$blog->author}}</small>
      </div>
    </div>
  </div>
</div>

@endsection


