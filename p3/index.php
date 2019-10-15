<?php require 'index-controller.php';?>

<!DOCTYPE html>
<html lang="en">    
    <head>
        <title>p3 - High Low Game</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
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
        
        
        <?php
        if ($resultsReady){
            echo '<br>';
            echo '<div class="results">'.$result.'</div>';
            echo '<div class="guessInfo">';
            echo '<br>';
            echo '<b>Guess:</b> ' .$guess;
            echo '<br><br>';
            echo '<b>Number of Guesses:</b> ' .$numGuesses;
            echo '<br><br>';
            echo '<b>List of Guesses: </b>';
            foreach ($guesses as $entry)
                echo $entry.'&nbsp;&nbsp;';
            echo '<br><br>';
            
            echo '<button onclick="reveal()" class="mysteryButton" class"fadeIn" id="show">Reveal Number</button>
        <br><br><br></div>';
            
            echo '<div id="revealNumber" class="fadeIn" style="display: none;">'.$number.' 
                <br><br>
            </div>';
            
            ?>
        
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
            
            </script>
        <?php } ?>
    
    </body>
</html>