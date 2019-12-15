@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }} - High Low Game
@endsection

@section('content')

    
        
    <h1>High Low Guessing Game</h1>
        
    <h2>Instructions</h2>

    <ul>
        <li>Guess the MYSTERY whole number between 0 and 100</li>

        <li>Type in your guess in the field and click the GUESS button</li>

        <li>You will get clues indicating if you are too high or too low</li>

        <li>You will get unlimited tries to guess the correct number</li>

        <li>Use the REVEAL NUMBER button to show the mystery number</li>

        <li>Use the PLAY AGAIN button to start over</li>
    </ul>

    <h2>Play</h2>

    Guess a whole number between 0 and 100:<br><br>

    @if($app->errorsExist())
        <ul class='alert alert-danger' style='width:600px'>
            @foreach($app->errors() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br>
    @endif
    
    <fieldset>
        <form action="/process" method="post">
            <input type="number" name="guess"><br>&nbsp;&nbsp;
            <input type="submit" id="guessButton" class="button" value="Guess">

        </form>

        <form action="/reset" method="post">
            &nbsp;&nbsp;
            <input type="submit" name="reset" class="button" value="Play Again">
        </form>
        
    </fieldset>

    <?php //include 'reveal.php'; ?>

    <br><br>

    @if(isset($_SESSION['guess']))
        <br>
        Number:  {{$_SESSION['number']}}
        <br>
        Player Guess: {{$_SESSION['guess']}}
        <br>
        Result: {{$_SESSION['result']}}
        <br>
        All Guesses: 
        @foreach($_SESSION['guesses'] as $guess)
            {{ $guess }}
        @endforeach
        <br>
        Total Number of Guesses: {{$_SESSION['numGuesses']}}
        <br>
    @endif
    <br><a href="/rounds">View Game History</a><br>


@endsection