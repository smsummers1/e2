@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@section('content')

    @if($newTitle)
    <div class="alert alert-success">
            Your post <b><i>{{$newTitle}}</i></b> was added. <br>
    </div>
    @endif

    @if($app->errorsExist())
    <ul class='error alert alert-danger'>
        @foreach($app->errors() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <a href='/posts'>View all posts......</a><br>

    <h3>Create A New Post</h3>

    <form method='post' action='/save-new-post'>        
        <label for='title'>Title </label>
        <input type="text" id='title' name='title' value="{{ $app->old('title') }}">
        <label for='content'>Content (Min: 255)</label>
        <textarea id='content' name='content'>{{ $app->old('title') }}</textarea>
        <button type="submit" class='btn btn-primary'>Create New Post</button>
    </form>

@endsection