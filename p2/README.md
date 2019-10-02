## Project 2
+ By: Shawna Summers
+ Production URL: <http://p2.shawnasummers.xyz>


## Game planning
*Define a winner variable set to the string 'Tie' and an isWinner variable to false.
*Player A and B randomly get assigned a token of X or O
    *Use the rand() function to assign a token of X or O 
    *X and O will be assigned as strings to PlayerA and PlayerB variables   
*Set up board with 9 locations on a 3x3 board
    *Create a single one-dimensional indexed array that starts at 0 and ends at 8.  In my imagination it is starting in the upper left hand corner and ending in the bottom right hand corner shown below.
    
        |       |       |       |
        | ----- | ----- | ----- |
        |   0   |   1   |   2   |
        |   3   |   4   |   5   |
        |   6   |   7   |   8   |
    
   *Store a meaningful descriptor such as "TopLeft", "TopCenter", "TopRight" in each array location so it is easy to remember what each array location correlates to on the board.
   
        |        |        |        |
        | ------ | ------ | ------ |
        | TopLeft | TopCenter | TopRight |
        | MiddleLeft | MiddleCenter | MiddleRight |
        | BottomLeft | BottomCenter | BottomRight |
   
+Player assigned X goes first
    +Player X goes first.  Since there are 9 plays the player that goes first also gets to go last giving them a total of 5 moves vs 4 moves for the player assigned O.
    +First have both players take 4 turns starting with Player assigned the X. 
    -As the player places a token in an empty and random location the descriptor in the array such as BottomLeft gets replaced by the X or O string.
    -Check for a winner after each play comparing the 8 possible winning vectors described below with their corresponding array locations.
    
    |         |          |
    | ------- | -------- |
    | Horizontal Top | board[0], board[1], board[2] |
    | Horizontal Middle | board[3], board[4], board[5] |
    | Horizontal Bottom | board[6], board[7], board[8] |
    | Vertical Left | board[0], board[3], board[6] |
    | Vertical Middle | board[1], board[4], board[7] |
    | Vertical Right | board[2], board[5], board[8] |
    | Across TL to BR | board[0], board[4], board[8] |
    | Across BL to TR | board[2], board[4], board[6] |

-First player to get 3 adaject tokens in one of the vectors listed above wins
    -Use conditional statements to check all of the above winning vectors on the board for the same token
    -if the same token is found in all adjacent array locations in the vector the game is over and that player is assigned as the winner.

-Once all 4 turns have been taken, the player assigned X will take their last turn.
    -locate the last location in the array that is missing an X or O and then place the X there.
    

-One last check for a winner.
    -check to see if X is a winner.  
    -if X is a winner assign true to the isWinner variable and set the winner variable to X.
    -If there is no winner then it is a TIE game.
    -winner variable remains set to TIE
    
-Display the final game board with details
    -Use a 3x3 html table placing images of either an X or a O in the corresponding token locations in the array board 
    -display winning vector, board locations, and the winner; x, O, or Tie.



## Outside resources
-php manual - php.net - https://www.php.net/
-w3schools php, html, css - w3school.com - https://www.w3schools.com/
-html validator - https://validator.w3.org/
-css validator - http://jigsaw.w3.org/css-validator/
-php validator - https://phpcodechecker.com/