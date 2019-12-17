<?php

echo "Hi, this is my process.php file";

$guess = $this->app->input('guess');

$guesses = array();

$guesses = $this->app->sessionGet('guesses');

$numGuesses = $this->app->sessionGet('numGuesses');

//this is the users 1st time guessing
if($numGuesses==0){
    //select a new random number for them to guess
    $this->app->sessionSet('number', rand(0,100));
}

$numGuesses += 1;

array_push($guesses, $guess);

//put all data to store into an array
$data = ['total_guesses' => $numGuesses];

//$number = $_SESSION['number'];
$number = $this->app->sessionGet('number');

//compare numbers
if($guess > $number){
    $result = 'Too High!';
}

elseif($guess < $number){
    $result = 'Too Low!';
}
else{
    $result = 'Correct!';
    $this->app->db()->insert('rounds', $data);
}

$this->app->sessionSet('result', $result);
$this->app->sessionSet('numGuesses', $numGuesses);
$this->app->sessionSet('guess', $guess);
$this->app->sessionSet('guesses', $guesses);
