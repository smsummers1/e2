
<?php

#############################
#  assign X or O to Player  #
#############################

function assignTokenToPlayer(){
    
    #decide who goes first based on who ever randomly gets X assigned to them.
if (rand(0, 1)) {
    $player1 = 'X';
    $player2 = 'O';
} else {
    $player1 = 'O';
    $player2 = 'X';
}

#display the random assignment of x and o to the players
echo 'PLAYER 1 assigned <b>' . $player1 . '</b><br>';
echo 'PLAYER 2 assigned <b>' . $player2 . '</b><br>';
}

########### end of assignTokenToPlayer() ###################



#############################
#  check for X as a winner  #
#############################

function isXaWinner($board)
{
    # Look Horizontally #
    
    #Horizontal Top
    if ($board[0] == 'X' && $board[1] == 'X' && $board[2] == 'X') {
        echo '<h3 class="winner">Winner is X</h3>';
        echo '<b>Winning Vector:</b><br>Horizontal Top<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[0] board[1] board[2] <br><br>';
        return true;
    }
    
    #Horixontal Middle
    if ($board[3] == 'X' && $board[4] == 'X' && $board[5] == 'X') {
        echo '<h3 class="winner">Winner is X</h3>';
        echo '<b>Winning Vector:</b><br>Horizontal Middle<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[3] board[4] board[5] <br><br>';
        return true;
    }
    
    #Horizontal Bottom
    if ($board[6] == 'X' && $board[7] == 'X' && $board[8] == 'X') {
        echo '<h3 class="winner">Winner is X</h3>';
        echo '<b>Winning Vector:</b><br>Horizontal Bottom<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[6] board[7] board[8] <br><br>';
        return true;
    }
    
    # Look Vertically #
    
    #Vertical Left
    if ($board[0] == 'X' && $board[3] == 'X' && $board[6] == 'X') {
        echo '<h3 class="winner">Winner is X</h3>';
        echo '<b>Winning Vector:</b><br>Vertical Left<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[0] board[3] board[6] <br><br>';
        return true;
    }
    
    #Vertical Middle
    if ($board[1] == 'X' && $board[4] == 'X' && $board[7] == 'X') {
        echo '<h3 class="winner">Winner is X</h3>';
        echo '<b>Winning Vector:</b><br>Vertical Middle<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[1] board[4] board[7] <br><br>';
        return true;
    }
    
    #Vertical Right
    if ($board[2] == 'X' && $board[5] == 'X' && $board[8] == 'X') {
        echo '<h3 class="winner">Winner is X</h3>';
        echo '<b>Winning Vector:</b><br>Vertical Right<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[2] board[5] board[8] <br><br>';
        return true;
    }

    # Look Across #
    
    #Across Top Left to Bottom Right
    if ($board[0] == 'X' && $board[4] == 'X' && $board[8] == 'X') {
        echo '<h3 class="winner">Winner is X</h3>';
        echo '<b>Winning Vector:</b><br>Across Top Left to Bottom Right<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[0] board[4] board[8] <br><br>';
        return true;
    }
    
    #Across Bottom Left to Top Right
    if ($board[2] == 'X' && $board[4] == 'X' && $board[6] == 'X') {
        echo '<h3 class="winner">Winner is X</h3>';
        echo '<b>Winning Vector:</b><br>Across Bottom Left to Top Right<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[2] board[4] board[6] <br><br>';
        return true;
    } else {
        return false;
    }
}

#######End of isXaWinner($board) ########



#############################
#  check for O as a winner  #
#############################

function isOaWinner($board)
{
    # Look Horizontally #
    
    #Horizontal Top
    if ($board[0] == 'O' && $board[1] == 'O' && $board[2] == 'O') {
        echo '<h3 class="winner">Winner is O</h3>';
        echo '<b>Winning Vector:</b><br> Horizontal Top<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[0] board[1] board[2] <br><br>';
        return true;
    }
    
    #Horizontal Middle
    if ($board[3] == 'O' && $board[4] == 'O' && $board[5] == 'O') {
        echo '<h3 class="winner">Winner is O</h3>';
        echo '<b>Winning Vector:</b><br> Horizontal Middle<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[3] board[4] board[5] <br><br>';
        return true;
    }
    
    #Horizontal Bottom
    if ($board[6] == 'O' && $board[7] == 'O' && $board[8] == 'O') {
        echo '<h3 class="winner">Winner is O</h3>';
        echo '<b>Winning Vector:</b><br> Horizontal Bottom<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[6] board[7] board[8] <br><br>';
        return true;
    }
    
    # Look Vertically #
    
    #Vertical Left
    if ($board[0] == 'O' && $board[3] == 'O' && $board[6] == 'O') {
        echo '<h3 class="winner">Winner is O</h3>';
        echo '<b>Winning Vector:</b><br> Vertical Left<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[0] board[3] board[6] <br><br>';
        return true;
    }
    
    #Vertical Middle
    if ($board[1] == 'O' && $board[4] == 'O' && $board[7] == 'O') {
        echo '<h3 class="winner">Winner is O</h3>';
        echo '<b>Winning Vector:</b><br> Vertical Middle<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[1] board[4] board[7] <br><br>';
        return true;
    }

    #Vertical Right
    if ($board[2] == 'O' && $board[5] == 'O' && $board[8] == 'O') {
        echo '<h3 class="winner">Winner is O</h3>';
        echo '<b>Winning Vector:</b><br> Vertical Right<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[2] board[5] board[8] <br><br>';
        return true;
    }

    # Look Across #
    
    #Across Top Left to Bottom Right
    if ($board[0] == 'O' && $board[4] == 'O' && $board[8] == 'O') {
        echo '<h3 class="winner">Winner is O</h3>';
        echo '<b>Winning Vector:</b><br> Across Top Left to Bottom Right<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[0] board[4] board[8] <br><br>';
        return true;
    }
    
    #Across Bottom Left to Top Right
    if ($board[2] == 'O' && $board[4] == 'O' && $board[6] == 'O') {
        echo '<h3 class="winner">Winner is O</h3>';
        echo '<b>Winning Vector:</b><br>Across Bottom Left to Top Right<br><br>';
        echo '<b>Winning Array Locations:</b><br>board[2] board[4] board[6] <br><br>';
        return true;
    } else {
        return false;
    }
}

##########end of isOaWinner($board) ###########





#####################################
#  display final tic tac toe board  #
#####################################

function displayFinalBoard($board){
    
    #display all values on the board in text
/*foreach ($board as $location => $location_value) {
    echo "Location=" . $location . ", Value=" . $location_value;
    echo "<br>";
}*/
    
    #display the results on a tic tac toe board visually 
echo "<div id='board'>";
echo "<table><tr>";
foreach ($board as $location => $location_value) {
    
    //1st row displayed
    if($location < 3){
        echo "<td>";

        if ($location_value == 'X') {
            echo "<div id='" . $location . "'><img src='x.png' width='32' height='32' alt='X'></div>";
        } elseif ($location_value == 'O') {
            echo "<div id='" . $location . "'><img src='o.png' width='32' height='30' alt='O'></div>";
        } else echo "<div id='" . $location . "'><img src='empty.png' width='32' height='32' alt='empty'></div>";
        echo "</td>";
    }
    
    if ($location == 2)
        echo "</tr><tr>";
    
    if($location >= 3 && $location < 6){
        echo "<td>";

        if ($location_value == 'X') {
            echo "<div id='" . $location . "'><img src='x.png' width='32' height='32' alt='X'></div>";
        } elseif ($location_value == 'O') {
            echo "<div id='" . $location . "'><img src='o.png' width='32' height='30' alt='O'></div>";
        } else echo "<div id='" . $location . "'><img src='empty.png' width='32' height='32' alt='empty'></div>";
        
        echo "</td>";
    }
    
    if($location == 5)
        echo "</tr><tr>";
    
    if($location >= 6){
        echo "<td>";

        if ($location_value == 'X') {
            echo "<div id='" . $location . "'><img src='x.png' width='32' height='32' alt='X'></div>";
        } elseif ($location_value == 'O') {
            echo "<div id='" . $location . "'><img src='o.png' width='32' height='30' alt='O'></div>";
        } else echo "<div id='" . $location . "'><img src='empty.png' width='32' height='32' alt='empty'></div>";
        
        echo "</td>";
        
    }
    if($location == 8)
        echo "</tr>";
    
}
echo "</table>";
echo "</div>";
}

########## end of displayBoard($board) ##############


############## Functions End HERE ###################
#####################################################




#########################################
#########################################
#####                               #####
##### PROGRAM STARTS EXECUTING HERE #####
#####                               #####
#########################################
#########################################


#create a board array
$board = array("TopLeft", "TopCenter", "TopRight", "MiddleLeft", "MiddleCenter", "MiddleRight", "BottomLeft", "BottomCenter", "BottomRight");

$isWinner = false;
$Winner = 'Tie';

assignTokenToPlayer();

#count 4 turns for X and O
for ($x = 0; $x < 4; $x++) {

    foreach ($board as $location => $location_value) { }
    $location = rand(0, 8);

    #Xs turn; choose a random location
    #while there is an X or an O in the location pick another location
    while ($board[$location] == 'X' || $board[$location] == 'O') {
        $location = rand(0, 8);
    }
    #found an empty location
    $board[$location] = 'X';

    #if X wins stop game to declare winner
    if (isXaWinner($board)) {
        $isWinner = true;
        break;
    }

    #Os turn; choose a random location
    #while there is an X or an O in the location pick another location
    while ($board[$location] == 'X' || $board[$location] == 'O') {
        $location = rand(0, 8);
    }
    #found an empty location
    $board[$location] = 'O';

    #if X wins stop game to declare winner
    if (isOaWinner($board)) {
        $isWinner = true;
        break;
    }
}

#if no winner and only one spot on board remains, it goes to X
if (!$isWinner) {
    #last move goes to X
    while ($board[$location] == 'X' || $board[$location] == 'O') {
        $location = rand(0, 8);
    }

    #found the last empty location
    $board[$location] = 'X';

    if (isXaWinner($board)) {
        $isWinner = true;
    }
}

#TIE game
if (!$isWinner) {
    echo '<h3 class="winner">This is a tie game!</h3>';
}

#display final tic tac toe board
displayFinalBoard($board);


