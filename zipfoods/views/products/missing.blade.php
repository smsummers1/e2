@extends('templates.master')


@section('title')
    Product not found
@endsection



@section('content')
<div id='product-show'>
    <br><br>
    <h4>Product {{ $_GET['id'] }} not found </h4>
    
    <p class='product-description'>
        Uh oh - we were not able to find the product you were looking for.
    </p>
    
</div>
    
<a href='/products'>Check out our other products......</a>
@endsection