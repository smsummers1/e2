@extends('templates.master')

@section('title')
p4 - All Rounds
@endsection

@section('content')
        
        <div class="col-sm text-center" style="background-color:#f8f8f8;">
            <br>
                <h2 style="font-size: 24pt;">Game History</h2><br>

                <h5><i>All Rounds</i></h5>
                @foreach($rounds as $round)
                <ul class="list-unstyled">
                    
                        <li style="font-size:20pt;" >
                            <a href="/round?id={{ $round['id'] }}" class="historyLink">
                                {{ $round['id'] }}

                            </a>
                        </li>
                </ul>
                
                @endforeach
        </div>

@endsection