@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }} - High Low Game
@endsection

@section('content')

<div class="row">
    
    <div class="col-sm-8" style="background-color:lavender;">
    <br>    
    <h3><small> Instructions </small></h3>

    <ul>
        <li>Guess the MYSTERY whole number between 0 and 100</li>

        <li>Type in your guess in the field and click the GUESS button</li>

        <li>You will get clues indicating if you are too high or too low</li>

        <li>You will get unlimited tries to guess the correct number</li>

        <li>Use the REVEAL NUMBER button to show the mystery number</li>

        <li>Use the PLAY AGAIN button to start over</li>
        
        <li>Click on the logo to go back to the home page</li>
    </ul>
    
    <h3><small>Play</small></h3>

        <p>Guess a whole number between 0 and 100:</p>

    @if($app->errorsExist())
        <ul class='alert alert-danger' style='width:600px'>
            @foreach($app->errors() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br>
    @endif
   
        <form action="/process" method="post">
            <input type="number" name="guess"><br>&nbsp;&nbsp;
            <input type="submit" id="guessButton" class="button" value="Guess">

        </form>

        <form action="/reset" method="post">
            &nbsp;&nbsp;
            <input type="submit" name="reset" class="button" value="Play Again">
        </form>
        
    </div>

    <div class="col-sm-4" style="background-color:#F8F8F8">
        <?php //include 'reveal.php'; ?>
        
        <div class="row">
                <div class="col" style="background-color:#E8E8E8;"><br><p><a href="/rounds"><center>View Game History</center></a></p><br></div>
        </div>
        
        @if(isset($_SESSION['guess']))
            <table class="table" style="border:1px solid black;">
                <br>
                <h3><small>Game Data</small></h3>
                <tr>
                    <td><b>Number:</b></td>  <td>{{$_SESSION['number']}}</td>
                </tr>
            
                <tr>
                    <td><b>Player Guess:</b> </td> <td>{{$_SESSION['guess']}}</td>
                </tr>
                
                <tr>
                    <td><b>Result:</b></td> <td>{{$_SESSION['result']}}</td>
                </tr>
                
                <tr>
                    <td><b>All Guesses: </b></td> 
                    <td>
                    @foreach($_SESSION['guesses'] as $guess)
                        {{ $guess }}
                    @endforeach
                    </td>
                </tr>
                
                <tr>
                    <td><b>Total Guesses:</b></td> <td>{{$_SESSION['numGuesses']}}</td>
                </tr>
                
            </table>
        @endif
        
        
    </div>
</div>
    
@endsection
    
