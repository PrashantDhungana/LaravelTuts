@extends('layouts.layout')

@section('title')
Show 
@endsection

@section('content')

    <div class="container">
        <div class="card-group">
            <div class="card">
                <img src="/images/{{$product->product_image}}" class="card-img-top" alt="..." height="400px" width="50px">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->product_name}}</h5>
                        <p class="card-text">{{$product->product_description}}</p>
                        <p class="card-text"><small class="text-muted">{{$product->product_price}}</small></p>
                        <p class="card-text"><small class="text-muted">{{$product->quantity}}</small></p>
                    </div>
            </div>
        </div>
    </div>
@endsection            
            

