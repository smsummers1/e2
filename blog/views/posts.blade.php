@extends('templates.master')

@section('title')
   All Posts
@endsection

@section('content')

    <h2>All Posts</h2>

    <ul>
        @foreach($posts as $post)
            <li>{{ $post['title'] }}</li>
        @endforeach

    </ul>

@endsection