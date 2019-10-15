## Project 3
+ By: Shawna Summers
+ Production URL: <http://p3.shawnasummers.xyz>


## Game planning
 * 1st I need to display instructions and forms on the index.php page so user can play against the computer.  There are two forms.  One for the user to submit their guess and one to reset the game.  There is also a third button used to display the mystery number that the user is trying to guess.
* Before I can display anything on the screen index-controller.php needs to set up the variables for index.php by deciding if the user has guessed yet or not.
* If it was the users first time guessing the index-controller.php will initialize a few of the session variables and store them in local variables as well as initialize a boolean variable indicating that this was the users first time guessing.
* If it wasn't the users first time guessing then the index-controller.php would store all of the collected session variables in to local variables for the index.php page to display and utilize.
* Instructions, forms and the two buttons; Guess and Play Again are displayed on the screen.
* I set up the html form input element 

'''html
<input type="number" name="guess" step="1" min="0" max="100" required>''' 

* Each attribute set up in this field help to ensure that the user is entering with in the parameters set in the instructions.  Step of 1 only allows whole numbers, min and max only allow the user to enter values within that range and number makes sure that the user only enters a number.
* Once the user enters their guess then the process.php has to decide if it is the first time the user entered the guess or not.
* If it is the first time then the mystery number is randomly generated calling the selectNumber().
* Then process.php needs to collect data from the post and session arrays.

'''php
$guess = $_POST['guess']; 
$guess = $_POST['guess'];
$guesses = $_SESSION['guesses'];
$numGuesses = $_SESSION['numGuesses'];'''

* The guess variable is from the form, the guesses variable stores all user guesses in an array, and nthe numGuesses variable accumulates the number of guesses per game.

''' $numGuesses += 1; '''

* Lastly process.php checks to see if the guess is the same as the number.  The results will be stored in the session variable to be later displayed by index.php.  It will either be "Too High!", "Too Low!", or "Correct!"
* Session variables get set and then process.php redirects back to the index.php page to allow the new information to be displayed.
* I set up a reveal button to hide the mystery number but to display it when the Reveal button is clicked.  It works like a toggle.  I also set up some neat animation and javascript to give it a mysterious feel.  :D

## Notes to Instructor
* Started working with Tic Tac Toe and after a week I abandoned it for a less complex game.  Decided on the High Low game so I could focus in on understanding design/work flow which is where I lost the majority of my points last time.

## Outside resources
* php manual - php.net - https://www.php.net/
* w3schools php, html, css - w3school.com - https://www.w3schools.com/
* html validator - https://validator.w3.org/
* css validator - http://jigsaw.w3.org/css-validator/
* php validator - https://phpcodechecker.com/

* mysterious effect - https://stackoverflow.com/questions/11660710/css-transition-fade-in

