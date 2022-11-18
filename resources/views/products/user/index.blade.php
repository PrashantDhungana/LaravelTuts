@extends(layouts.user)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src=  
@if ($product->product_image)
                src="/images/{{ $product->product_image }}"
                @endif

                alt="profile" height="50px" width="50px"> 

{{$product->product_name}};
{{$product->product_price}};
{{$product->product_description}};
{{$product->quality}};

{{$product->ratings}};
    
</body>
</html>



