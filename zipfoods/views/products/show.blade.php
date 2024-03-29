@extends('templates.master')


@section('title')
    {{ $product['name'] }}
@endsection



@section('content')

{{-- check for errors and output any if they exist --}}
@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

{{-- successful form submission --}}
@if($confirmationName)
<div class='alert alert-success'>
    Thank you, {{$confirmationName}} for your review.
</div>
@endif

<div id='product-show'>
    
    <h2> {{ $product['name'] }}</h2>

    @if($product['id'] > 10)
                
        <img class='product-image' src='/images/products/11.jpg' alt='missing image'>
                
    @else
                
        <img class='product-image' src="/images/products/{{ $product['id'] }}.jpg">
                
    @endif
    
    <p class='product-description'>
        {{ $product['description'] }}
    </p>

    <div class='product-price'>${{ $product['price'] }}</div>
    
    <form method='POST' id='product-review' action='/products/save-review'>
        <h3>Review this product</h3>
        <input type='hidden' name='id' value='{{ $product["id"] }}'>
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>

        <div class='form-group'>
            <label for='content'>Review</label>
            <textarea name='content' id='content' class='form-control'>{{ $app->old("content") }}</textarea>
        </div>

        <button type='submit' class='btn btn-primary'>Submit Review</button>
    </form>
    
    <h3>Reviews</h3>
    @if($reviews)
    
        @foreach($reviews as $review)
        <div class='review'>
            <span class='review-name'>{{ $review['name'] }}</span>
            <p>{{ $review['content'] }}</p>
        </div>
        @endforeach
    @else
        No reviews yet.
    @endif
    
</div>
    
<a href='/products'>&larr; Return to all products</a>
@endsection