<?php

session_start();

//reset game

$_SESSION['reset'] = TRUE;
    
$_SESSION['guess'] = NULL;
    
unset($_SESSION['guesses']);

$_SESSION['number'] = NULL;

$_SESSION['result'] = NULL;

$_SESSION['numGuesses'] = NULL;
    
$resultsReady = FALSE;
    
header('Location: index.php');
