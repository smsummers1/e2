<?php
session_start();

//session variables have been set 
//user has made at least one guess 
if(isset($_SESSION['guess'])){
    $guess = $_SESSION['guess'];
    $number = $_SESSION['number'];
    $result = $_SESSION['result'];
    $numGuesses = $_SESSION['numGuesses'];
    $guesses = $_SESSION['guesses']; //array
    
    $resultsReady = TRUE;
}

//1st session and no guesses have been made
else {
    $resultsReady = FALSE;
    $_SESSION['numGuesses'] = 0;
    $guesses = $_SESSION['guesses'] = array();
}

