@extends('templates.master')

@section('title')
p4 - All Rounds
@endsection

@section('content')
    
    <h2>All Rounds</h2>

    <ul>
        @foreach($rounds as $round)
            <li>{{ $round['id'] }}</li>
        @endforeach

    </ul>

@endsection