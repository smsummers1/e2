@extends('templates.master')

@section('title')
    ZipFoods
@endsection

@section('content')
    
    <h2>Welcome!</h2>

<p>
{{ $app->config('app.name') }} is your one-stop-shop for convenient online grocery shopping in the greater Boston area.
</p>

<p>
    <a href='/products'>Check out our selection of products...</a>
    <br><br><br><br><br><br><br><br>
    <div style="background-color: lightgrey">
        <h4>Admin Section</h4>
        <a href='/addProduct'>Add New Product</a>
    </div>
</p>

@endsection