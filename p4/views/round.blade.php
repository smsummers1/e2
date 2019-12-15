@extends('templates.master')

@section('title')
p4 - Individual Round
@endsection

@section('content')
    
<h2>Game Round: {{ $round['id'] }}</h2>
<p>
    Total Guesses: {{ $round['total_guesses'] }}
</p>

<p>
    Date and Time: {{ $round['date']}}
</p>

<a href='/rounds'>&larr; All Rounds</a>

@endsection