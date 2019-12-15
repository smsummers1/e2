@extends('templates.master')

@section('title')
p4 - All Rounds
@endsection

@section('content')
    
    <h2>All Rounds</h2>

    <ul style="list-style-type: none">
        @foreach($rounds as $round)
            <a href="/round?id={{ $round['id'] }}"><li>
                {{ $round['id'] }}
                </li></a>
            <br>
        @endforeach

    </ul>

@endsection