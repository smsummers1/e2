@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }} - High Low Game
@endsection

@section('content')

<div class="row">
    
    <div class="col-sm-7" style="background-color:lavender;padding: 20px;">   
        
    <button type="button" class="collapsible text-center" style="font-size:20pt; ">Instructions</button>
    <div class="content">
      <br><br>
      <ul>
        <li>Guess the MYSTERY whole number between 0 and 100</li>

        <li>Type in your guess in the field and click the GUESS button</li>

        <li>You will get clues indicating if you are too high or too low</li>

        <li>You will get unlimited tries to guess the correct number</li>

        <li>Use the REVEAL NUMBER button to show the mystery number</li>

        <li>Use the PLAY AGAIN button to start over</li>
        
        <li>Click on the logo to go back to the home page</li>
          
        <li>Click on the Instructions title to toggle the instructions display</li>
    </ul>
    <br>
    </div>
        
    <br><br><br>
    <h3><small>Play</small></h3>

        <p style="font-size:12pt;">Guess a whole number between 0 and 100:</p>

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
    </div>

    <div class="col-sm-5 text-center" style="background-color:#F8F8F8;">
        
        <div class="row">
                <div class="col align-middle" style="background-color:#E8E8E8;"><br><p><a href="/rounds" id="historyLink">View Game History</a></p></div>
        </div>
        <br>
        @if(isset($_SESSION['guess']))
            <table class="table" style="border:1px solid black;">
                <h3 class=""><small>Game Data</small></h3>
                <tr>
                    <td><b>Result:</b></td> <td id='result' style="color:red;font-size:20pt;">{{$_SESSION['result']}}</td>
                </tr>
            
                <tr>
                    <td><b>Player Guess:</b> </td> <td>{{$_SESSION['guess']}}</td>
                </tr>
                
                 <tr>
                    <td><b>Total Guesses:</b></td> <td>{{$_SESSION['numGuesses']}}</td>
                </tr>
                
                <tr>
                    <td><b>List of Guesses: </b></td> 
                    <td>
                    @foreach($_SESSION['guesses'] as $guess)
                        {{ $guess }}
                    @endforeach
                    </td>
                </tr>
                
               
                <tr>
                    <td><button onclick="reveal()" class="mysteryButton" class="fadeIn" id="show">Reveal Number</button></td>
                        
                    <td>
                    <span id="revealNumber" class="fadeIn" style="display: none;">{{$_SESSION['number']}} </span></td>
            
                </tr>
                
            </table>
        @endif
        
    </div>
</div>

<!--<script src="../public/js/myScripts.js"></script>-->
<!-- JavaScript Functions -->
<script>
    function reveal() {
      var x = document.getElementById("revealNumber");
      if (x.style.display == "none") {
        x.style.display = "block";
        x.class = "fadeIn";
      } else {
        x.style.display = "none";
      }
    }   

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
</script>
    
@endsection
    
