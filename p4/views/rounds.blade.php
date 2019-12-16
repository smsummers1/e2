@extends('templates.master')

@section('title')
p4 - All Rounds
@endsection

@section('content')
        
        <div class="col-sm" style="background-color:#f8f8f8; ">
            <center><br>
                <h2>Game History</h2><br>

                <h5><i>All Rounds</i></h5>

                <ul style="list-style-type: none">
                    @foreach($rounds as $round)
                        <a href="/round?id={{ $round['id'] }}">
                            <li style="font-size:18pt;">
                            {{ $round['id'] }}
                            </li>
                        </a>
                        <br>
                    @endforeach
                </ul>
            </center>
        </div>

@endsection