<!DOCTYPE html>
<!-- Author: Shawna Summers -->
<!-- Project: 2 -->

<html lang="en">

    <head>
        <title>Project 2</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>
        <h1>Tic Tac Toe</h1>

        <h2 class="important">Mechanics</h2>
        <ul>
            <li>Player A and B randomly gets assigned a token of X or O</li>
            <li>Player assigned X goes first</li>
            <li>The board consists of 9 locations in a 3x3 layout</li>
            <li>Each player takes turns until all empty locations on the board have a token or a player gets 3 adjacent
                tokens wins.</li>
            <li>If no player wins it becomes a tie game.</li>
            <li>Display the game results.</li>
        </ul>
        <!--<p>There are 9 locations on the board.  O gets 4 turns.  X gets 5 turns.  Player 1 and Player 2 randomly get assigned an O or X. Which ever player ends up being assigned X will get an extra last move because X always goes first and whoever goes first in tic tac toe ends up getting an extra turn. (This is something I never noticed before writting this program. Too funny!)</p>
    <p>The board is an array that has an index that starts at 0 and ends at 8 starting in the upper left hand corner and ending in the bottom right hand corner shown below. 
    </p>

    <table>
        <tr>
            <td>&nbsp;0&nbsp;</td>
            <td>&nbsp;1&nbsp;</td>
            <td>&nbsp;2&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;3&nbsp;</td>
            <td>&nbsp;4&nbsp;</td>
            <td>&nbsp;5&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;6&nbsp;</td>
            <td>&nbsp;7&nbsp;</td>
            <td>&nbsp;8&nbsp;</td>
        </tr>
    </table>
    
    <p>I created an array storing meaningful descriptors like "TopLeft", "TopCenter", and TopRight" in each array location so I could easily understand where the Xs and Os were being placed on the board. </p>
    
    <table>
        <tr>
            <td class="space">&nbsp;TopLeft&nbsp;</td>
            <td class="space">&nbsp;TopCenter&nbsp;</td>
            <td class="space">&nbsp;TopRight&nbsp;</td>
        </tr>
        <tr>
            <td class="space">&nbsp;MiddleLeft&nbsp;</td>
            <td class="space">&nbsp;MiddleCenter&nbsp;</td>
            <td class="space">&nbsp;MiddleRight&nbsp;</td>
        </tr>
        <tr>
            <td class="space">&nbsp;BottomLeft&nbsp;</td>
            <td class="space">&nbsp;BottomCenter&nbsp;</td>
            <td class="space">&nbsp;BottomRight&nbsp;</td>
        </tr>
    </table>
    
    <p>The winner is the player that ends up with three adjacent Xs or Os on the board. </p>-->

        <h2 class="important">Results</h2>

        <?php require 'index-controller3.php' ?>

    </body>

</html>