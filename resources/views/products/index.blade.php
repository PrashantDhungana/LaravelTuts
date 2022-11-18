@extends('layouts.layout')

@section('content')
@if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
     
    <a href="/product/create" class="btn btn-success">Create a new form</a>
    <div class="">
      <table class="table table-stripped">
     <thead class="bg-dark text-white p-2">
            <th >Name</th>
            <th >Price</th>
            <th >Description</th>
            <th >Quantity</th>
            <th>Image</th>
            <th>Ratings</th>
            <th>Actions</th>
        </thead>
        <tbody>
          @foreach($products as $product)
                <tr>
                   <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>{{$product->quantity}}</td>
    
                    <td><img
                     @if($product->product_image)
                       src=" /images/{{ $product->product_image }}" 
                      @endif
                        alt="profile" height="50px" width="50px">
                    </td>

                    <td>{{$product->ratings}}</td>
                    <td><a href="/product/{{ $product->id }}" class="btn btn-success">Show</a>
                    <a href="/product/{{ $product->id }}/edit" class="btn btn-info">Edit</a>
                    <div class="d-flex">
                   <form action="/product/{{ $product->id }}" method="POST">
                       @csrf
                      @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                  </tr>
          @endforeach  
      </tbody>
    </table>
 </div>
@endsection
