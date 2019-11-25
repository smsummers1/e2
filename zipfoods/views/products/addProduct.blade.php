@extends('templates.master')


@section('title')
    Add Product
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

<div id='product-show'>
    
    <form method='POST' id='product-review' action='/products/new'>
        <h3>Add Product</h3>
        
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}' required>
        </div>

        <div class='form-group'>
            <label for='description'>Description</label>
            <input type='text' class="form-control" name='description' id='description' value='{{ $app->old("description") }}' required>
        </div>
        
        <div class='form-group'>
            <label for='price'>Price</label>
            <input type='number' step='.01' class="form-control" name='price' id='price' value='{{ $app->old("price") }}' required>
        </div>
        
        <div class='form-group'>
            <label for='available'>Available</label>
            <input type='number' step='1' class="form-control" name='available' id='available' value='{{ $app->old("available") }}' required>
        </div>
        
        <div class='form-group'>
            <label for='weight'>Weight</label>
            <input type='number' step='.01' class="form-control" name='weight' id='weight' value='{{ $app->old("weight") }}' required>
        </div>
        
        <div class='form-group'>
            <label for='perishable'>Perishable</label>
        </div>
        
        <div class='form-check form-check-inline'>
            <input class="form-check-input" type='radio' name='perishable' id='perishable' value='1'>
            <label class="form-check-label" for='perishable'>Yes</label>
        </div>
        
        <div class='form-check form-check-inline'>
            <input class="form-check-input" type='radio' name='perishable' id='perishable' value='0'>
            
             <label class="form-check-label" for='perishable'>No</label>
        </div>
        <br><br>

        <button type='submit' class='btn btn-primary'>Submit Product</button>
    </form>
    
</div>
    
<a href='/'>&larr; Return home</a>
@endsection