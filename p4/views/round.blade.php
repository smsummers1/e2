@extends('templates.master')

@section('title')
p4 - Individual Round
@endsection

@section('content')
   
 <div class="col-sm" style="background-color:#f8f8f8; ">
    <center><br>
        <h2>Game Round: {{ $round['id'] }}</h2>
        <p>
            Total Guesses: {{ $round['total_guesses'] }}
        </p>

        <p>
            Date and Time: {{ $round['date']}}
        </p>

        <a href='/rounds'>&larr; All Rounds</a>
     </center>
</div>
@endsection