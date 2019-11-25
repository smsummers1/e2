@extends('templates.master')


@section('title')
    All Products
@endsection



@section('content')
    
    <h2>All products</h2>
    <h6><i><a href='/addProduct'>
    <img src="/images/addAProduct.png" style="width:50px; height:50px"></a></i></h6>

    <div id='product-index'>
        
        @foreach($products as $product)
            <a href='/product?id={{ $product["id"] }}'>
            <div class='product'>
                <div class='product-name'>{{ $product['name'] }} </div>
                
                @if($product['id'] > 10)
                
                    <img class='product-thumb' src='/images/products/11.jpg' alt='missing image'>
                
                @else
                
                    <img class='product-thumb' src="/images/products/{{ $product['id'] }}.jpg">
                
                @endif
                
            </div>
            </a>
        @endforeach
        <br><br>
        <a href='/'>&larr; Return home</a>
        
        <br><br><br><br><br><br><br><br>
        <div style="background-color: lightgrey">
            <h4>Admin Section</h4>
            <a href='/addProduct'>Add New Product</a>
        </div>
        
    </div>
        
@endsection