@extends('templates.master')

@section('title')
p4 - All Rounds
@endsection

@section('content')
        
        <div class="col-sm text-center" style="background-color:#f8f8f8;">
            <br>
                <h2 style="font-size: 24pt;">Game History</h2><br>

                <h5><i>All Rounds</i></h5>

                <ul class="list-unstyled">
                    @foreach($rounds as $round)
                        <a href="/round?id={{ $round['id'] }}" id="historyLink">
                            <li style="font-size:20pt;" >
                            {{ $round['id'] }}
                            </li>
                        </a>
                        <br>
                    @endforeach
                </ul>
        </div>

@endsection