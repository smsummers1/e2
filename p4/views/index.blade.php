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

    <fieldset>
        <form action="process.php" method="post">
            <input type="number" name="guess" step="1" min="0" max="100" required><br>&nbsp;&nbsp;
            <input type="submit" class="button" value="Guess">

        </form>

        <form action="reset.php" method="post">
            &nbsp;&nbsp;
            <input type="submit" name="reset" class="button" value="Play Again">
        </form>
    </fieldset>

@endsection