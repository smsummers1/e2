@extends('templates.master')

@section('title')
   All Posts
@endsection

@section('content')

    @if($app->old('postNotFound'))
        <div class='alert alert-warning'>
            Sorry, the post you are looking for does not exist.
        </div>
    @endif

    <h2>All Posts</h2>

    <ul>
        @foreach($posts as $post)
        <li><a href="/post?id={{ $post['id'] }}"> {{ $post['title'] }}</a></li>
        @endforeach

    </ul>

@endsection