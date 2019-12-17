@extends('templates.master')

@section('title')
p4 - Individual Round
@endsection

@section('content')
   
 <div class="col-sm text-center" style="background-color:#f8f8f8; ">
    <br><br>
        <h2>Game Round: {{ $round['id'] }}</h2><br>
     <p><b><span style="font-size:18pt;">Total Guesses:</span></b> 
         <br>{{ $round['total_guesses'] }}
        </p>
        <br>
        <p>
            <b><span style="font-size:18pt;">Date and Time: </span></b>
            <br>{{ $round['date']}}
        </p>
        <br><br>
        <a href='/rounds'>&larr; All Rounds</a>
</div>
@endsection