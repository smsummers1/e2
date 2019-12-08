@extends('templates.master')

@section('title')
{{ $post['title'] }}
@endsection

@section('content')
    
<h2>{{ $post['title'] }}</h2>
<p>
    {{ $post['content' ]}}
</p>
<a href='/posts'>&larr; All Posts</a>
@endsection