<?php

//include 'disableButton.php';

echo "Hi, this is my process.php file";

$guess = $this->app->input('guess');

$guesses = array();

$guesses = $this->app->sessionGet('guesses');

$numGuesses = $this->app->sessionGet('numGuesses');

//echo '<br><br>Players Guess';
//dump($guess);

//echo 'Total Number of Guesses';
//dump($numGuesses);

//this is the users 1st time guessing
//if($app->sessionGet('numGuesses') == null){
if($numGuesses==0){
    //select a new random number for them to guess
    $this->app->sessionSet('number', rand(0,100));
}

$numGuesses += 1;

array_push($guesses, $guess);

//echo 'Guesses Array';
//dump($guesses);

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
    ?>

    <script>
    document.getElementById("guessButton").setAttribute("disabled", true);
    </script>

    <?php
}

$this->app->sessionSet('result', $result);
$this->app->sessionSet('numGuesses', $numGuesses);
$this->app->sessionSet('guess', $guess);
$this->app->sessionSet('guesses', $guesses);
