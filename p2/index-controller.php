<?php

#need a board array
$board = array("TopLeft", "TopCenter", "TopRight", "MiddleLeft", "MiddleCenter", "MiddleRight", "BottomLeft", "BottomCenter", "BottomRight");

$Winner = false;

#decide who goes first based on who ever randomly gets X assigned to them.
if (rand(0, 1)) {
    $player1 = 'X';
    $player2 = 'O';
} else {
    $player1 = 'O';
    $player2 = 'X';
}
#display the random assignment of x and o to the players
echo '<br><br>';
echo 'PLAYER 1 assigned <b>' . $player1 . '</b><br>';
echo 'PLAYER 2 assigned <b>' . $player2 . '</b><br>';
echo '<br><br>';

#count 4 turns for X and O
for ($x = 0; $x < 4; $x++) {

    echo 'Number of Loops: $x<br><br>';
    foreach ($board as $location => $location_value) { }
    $location = rand(0, 8);

    #Xs turn; choose a random location
    #while there is an X or an O in the location pick another location
    while ($board[$location] == 'X' || $board[$location] == 'O') {
        $location = rand(0, 8);
    }
    #found an empty location
    $board[$location] = 'X';
    #echo "<figure><img src='x.png' width=30px height=30px></figure>";

    if (isXaWinner($board)) {
        $Winner = true;
        break;
    }

    #Os turn; choose a random location
    #while there is an X or an O in the location pick another location
    while ($board[$location] == 'X' || $board[$location] == 'O') {
        $location = rand(0, 8);
    }
    #found an empty location
    $board[$location] = 'O';
    #echo "<figure><img src='o.png' width=25px height=25px></figure>";

    if (isOaWinner($board)) {
        $Winner = true;
        break;
    }
}
if (!$Winner) {
    #last move goes to X
    while ($board[$location] == 'X' || $board[$location] == 'O') {
        $location = rand(0, 8);
    }

    #found the last empty location
    $board[$location] = 'X';

    if (isXaWinner($board)) {
        $Winner = true;
    }
}

if (!$Winner) {
    echo '<h2>This is a tie game!</h2><br><br>';
}


#############################
#  check for X as a winner  #
#############################

function isXaWinner($board)
{
    #Look Horizontally
    if ($board[0] == 'X' && $board[1] == 'X' && $board[2] == 'X') {
        echo '<h2>Winner is X</h2>';
        echo 'Horizontal Top<br>';
        echo 'board[0] board[1] board[2] <br><br>';
        return true;
    }
    if ($board[3] == 'X' && $board[4] == 'X' && $board[5] == 'X') {
        echo '<h2>Winner is X</h2>';
        echo 'Horizontal Middle<br>';
        echo 'board[3] board[4] board[5] <br><br>';
        return true;
    }
    if ($board[6] == 'X' && $board[7] == 'X' && $board[8] == 'X') {
        echo '<h2>Winner is X</h2>';
        echo 'Horizontal Bottom<br>';
        echo 'board[6] board[7] board[8] <br><br>';
        return true;
    }
    #Look Vertically
    if ($board[0] == 'X' && $board[3] == 'X' && $board[6] == 'X') {
        echo '<h2>Winner is X</h2>';
        echo 'Vertical Left<br>';
        echo 'board[0] board[3] board[6] <br><br>';
        return true;
    }
    if ($board[1] == 'X' && $board[4] == 'X' && $board[7] == 'X') {
        echo '<h2>Winner is X</h2>';
        echo 'Vertical Middle<br>';
        echo 'board[1] board[4] board[7] <br><br>';
        return true;
    }
    if ($board[2] == 'X' && $board[5] == 'X' && $board[8] == 'X') {
        echo '<h2>Winner is X</h2>';
        echo 'Vertical Right<br>';
        echo 'board[2] board[5] board[8] <br><br>';
        return true;
    }

    #Look Across
    if ($board[0] == 'X' && $board[4] == 'X' && $board[8] == 'X') {
        echo '<h2>Winner is X</h2>';
        echo 'Across TL to BR<br>';
        echo 'board[0] board[4] board[8] <br><br>';
        return true;
    }
    if ($board[2] == 'X' && $board[4] == 'X' && $board[6] == 'X') {
        echo '<h2>Winner is X</h2>';
        echo 'Across BL to TR<br>';
        echo 'board[2] board[4] board[6] <br><br>';
        return true;
    } else {
        return false;
    }
}
#############################
#  check for O as a winner  #
#############################

function isOaWinner($board)
{
    #Look Horizontally
    if ($board[0] == 'O' && $board[1] == 'O' && $board[2] == 'O') {
        echo '<h2>Winner is O</h2>';
        echo 'Horizontal Top<br>';
        echo 'board[0] board[1] board[2] <br><br>';
        return true;
    }
    if ($board[3] == 'O' && $board[4] == 'O' && $board[5] == 'O') {
        echo '<h2>Winner is O</h2>';
        echo 'Horizontal Middle<br>';
        echo 'board[3] board[4] board[5] <br><br>';
        return true;
    }
    if ($board[6] == 'O' && $board[7] == 'O' && $board[8] == 'O') {
        echo '<h2>Winner is O</h2>';
        echo 'Horizontal Bottom<br>';
        echo 'board[6] board[7] board[8] <br><br>';
        return true;
    }
    #Look Vertically
    if ($board[0] == 'O' && $board[3] == 'O' && $board[6] == 'O') {
        echo '<h2>Winner is O</h2>';
        echo 'Vertical Left<br>';
        echo 'board[0] board[3] board[6] <br><br>';
        return true;
    }
    if ($board[1] == 'O' && $board[4] == 'O' && $board[7] == 'O') {
        echo '<h2>Winner is O</h2>';
        echo 'Vertical Middle<br>';
        echo 'board[1] board[4] board[7] <br><br>';
        return true;
    }

    if ($board[2] == 'O' && $board[5] == 'O' && $board[8] == 'O') {
        echo '<h2>Winner is O</h2>';
        echo 'Vertical Right<br>';
        echo 'board[2] board[5] board[8] <br><br>';
        return true;
    }

    #Look Across
    if ($board[0] == 'O' && $board[4] == 'O' && $board[8] == 'O') {
        echo '<h2>Winner is O</h2>';
        echo 'Across TL to BR<br>';
        echo 'board[0] board[4] board[8] <br><br>';
        return true;
    }
    if ($board[2] == 'O' && $board[4] == 'O' && $board[6] == 'O') {
        echo '<h2>Winner is O</h2>';
        echo 'Across BL to TR<br>';
        echo 'board[2] board[4] board[6] <br><br>';
        return true;
    } else {
        return false;
    }
}

#display all values on the board
foreach ($board as $location => $location_value) {
    echo "Location=" . $location . ", Value=" . $location_value;
    echo "<br>";
}

#display the results on a tic tac toe board visually 
echo "<div id='board'>";
foreach ($board as $location => $location_value) {

    if ($location_value == 'X') {
        echo "<div id='" . $location . "'><img src='x.png' width=35px height=32px></div>";
    } elseif ($location_value == 'O') {
        echo "<div id='" . $location . "'><img src='o.png' width=32px height=30px></div>";
    } else echo "<div id='" . $location . "'><img src='empty.png' width=35px height=32px></div>";
}
echo "</div>";
