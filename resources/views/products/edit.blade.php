@extends('layouts.layout')
@section('title')
Edit a form
@endsection
@section('content')
<div class="container">
<form action=" {{ route('product.update', $product->id) }} "  method="post" enctype="multipart/form-data" id="product">
    @method('PUT')
    @csrf
    <div class="">
        <input type="text" value="{{$product->product_name}}" class="" name="product_name" placeholder="Eg:Ram">
    </div>
    <div class="">
        <input type="text" value="{{$product->product_price}}" class="" name="product_price" placeholder="Eg:10">
    </div>
    <div class="">
        <input type="text" value="{{$product->product_description}}" class="" name="product_description" placeholder="This product is about 5 inch in lengthand white in color.">
    </div>
    <div class="">
        <input type="file" value="{{$product->product_image}}" name="product_image" class="" accept="image/*">
    </div>
    <div class="">
        <input type="text" value="{{$product->quantity}}" class="" name="quantity" placeholder="Eg: 9 pieces">
    </div>
    <div class="">
         <input type="text" value="{{$product->ratings}}" class="" name="ratings" placeholder="ratings">
    </div>
    <div class="">
        <button type="submit" value="submit" class="">Submit</button>
    </div >

</form>
</div>
@endsection