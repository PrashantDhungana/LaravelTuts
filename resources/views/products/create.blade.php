@extends('layouts.layout')

@section('title')
Create a new product
@endsection

@section('content')
<div class="container">
    <div class="col-md-4 offset-md-4">
        <div class="row pt-5">
                <form action="{{route('product.store')}}"  method="post" enctype="multipart/form-data" id="product1">
                    @csrf
                    <div class="">
                            <input type="text" name="product_name" class="m-3" placeholder="Product name">
                    </div>
                    <div class="">
                             <input type="text" name="product_price" class="m-3" placeholder="Product price">
                    </div>
                    <div>
                              <input type="text" name="product_description" class="m-3" placeholder="Description">
                    </div>
                    <div>
                             <input type="file" name="product_image" class="m-3" accept="image/*">
                    </div>
                    <div>
                            <input type="text" name="quantity" class="m-3" placeholder="Quantity">
                    </div>
                    <div>
                            <input type="text" name="ratings" class="m-3" placeholder="Ratings">
                    </div>

                    <div>
                             <button type="submit" name="submit" class="m-3">Submit</button>
                    </div>
                </form>
            </div>
       </div>
<div>
@endsection