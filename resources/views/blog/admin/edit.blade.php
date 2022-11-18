@extends ('blog.layout.layouts')

@section('title')
Edit
@endsection

@section('content')
 <form action="{{route('blog.update',$blog->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="col-md-3 offset-md-3">
            <div class="row">
            <div >
  
        <div >
            <Label>Title of the blog
                <div>
                     <input type="text"  value="{{$blog->title}}" placeholder="title of the blog" name="title" class="form-control" id="title">
                </div>
        </div>
        <div >
            <Label>Slug
                <div>
        <input type="text" value="{{$blog->slug}}" name="slug" id="title" class="form-control ">

        <div>
            <Label>Image 
                <div>
                     <input type="file" value="{{$blog->image}}" placeholder="image" name="image" class="form-control-lg" id="image">
                </div>
        </div>
        <div>
            <Label>Body
                <div>
                    <input type="textarea" value="{{$blog->body}}" placeholder="Body" name="body" class="form-control-lg" id="title">
                </div>
        </div>
        <div>
            <Label>Author
                <div>
                    <input type="text" value="{{$blog->author_name}}" placeholder="author name" class="form-control-lg" name="author_name" id="author">
                </div>
        </div>
        <div>
            <button type="submit" class="btn btn-lg btn-info form-control m-2" name="submit">SEND</button>
        </div>
    </div>
    <div>
        </div>
    </form>
</div>
@endsection