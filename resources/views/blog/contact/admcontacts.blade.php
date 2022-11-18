@extends('blog.layout.layouts')

@section('content')

<div class="text-center">
        <div class="bg-info text-white p-3">Table</div>
    <table class="table table-bordered table-striped">
    
        <thead class="bg-dark text-white p-2">
            <th >Name</th>
            <th >Email</th>
            <th >Phone number</th>
            <th >Message</th>
            <th >Actions</th>
        </thead>
        <tbody>
    @foreach($contacts as $contact)
    <tr >
        <td >{{$contact->name}}</td>
        <td >{{$contact->email}}</td>
        <td >{{$contact->phone_number}}</td>
        <td >{{$contact->message}}</td>
        <td> 
            <div class="d-flex">
            <a href="#" class="btn btn-info">Show</a>
            <a href="/contact/{{$contact->id}}/edit" class="btn btn-success">Edit</a>
                <form action ="/contact/{{$contact->id}}" method="POST">
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