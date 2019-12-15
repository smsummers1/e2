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