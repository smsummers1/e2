<?php
session_start();

/////  FUNCTIONS  /////////////////////////

function selectNumber(){
    $_SESSION['number'] = rand(0,100);
}

function compareNumbers($number, $guess){
    //if guess is higher than number
    if($guess > $number){
        //set result to too high
        $result = 'Too High!';
    }elseif($guess < $number){
        //set result to too low
        $result = 'Too Low!';
    }else{
        //set result to correct
        $result = 'Correct!';
    }
    
    $_SESSION['result'] = $result;
}

///////////////////////////////////////////


//pull guesses from the form - post array
$guess = $_POST['guess'];
$guesses = $_SESSION['guesses'];
$numGuesses = $_SESSION['numGuesses'];

//if first guess pick a number and add new guess to the guesses array to display for user later to help them keep track of their guesses
if($numGuesses == 0){
    selectNumber();
}
    
$numGuesses += 1; 
array_push($guesses, $guess);

$number = $_SESSION['number'];

compareNumbers($number, $guess);

$_SESSION['numGuesses'] = $numGuesses;
$_SESSION['guess'] = $guess;
$_SESSION['guesses'] = $guesses;

header('Location: index.php');
