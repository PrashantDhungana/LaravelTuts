<?php

namespace App\Http\Controllers;

use  App\Models\Product;
use Illuminate\Http\Request;
 use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
       
        if($request->file('product_image'))
        {
            
            $file=$request->file('product_image');
            $filename=uniqid().Str::random(10).'.'.$file->getClientOriginalExtension();
            $product->product_image = $filename;
            $file-> move(public_path('/images'), $filename);
           
        }
        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->product_description=$request->product_description;
        
        $product->quantity=$request->quantity;
        $product->ratings=$request->ratings;

        if($product->save()){
           return redirect('/product')->with('success','Successfully inserted');
        }
        else{
           return redirect('/product')->with('error','Something is wrong');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return view('Products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('Products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $product= Product::where('id', $id)->firstorFail();

        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->product_description=$request->product_description;
        $product->quantity=$request->quantity;
        $product->ratings=$request->ratings;
        
        $file=$request->product_image;
        $filename=uniqid(). Str::random(10).'.'.$file->getClientOriginalExtension();
        $product->product_image=$filename;
        $file-> move(public_path('/images'), $filename);
        if($product->save()){
            return redirect('/product')->with('success','Successfully updated');
         }
         else{
            return redirect('/product')->with('error','Something is wrong');
         }
 



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $product=Product::find($id);

        if($product->delete()){
           return redirect('/product')->with('Success','Successfully deleted.');
        }
        else{
            return redirect('/product')->with('Error','Something is wrong.');

        }

    }
}
