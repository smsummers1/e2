<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        //session variables have been set or
        //user has made at least one guess 
        if(isset($_SESSION['guess'])){
            $guess = $this->app->sessionGet('guess');
            $number = $this->app->sessionGet('number');
            $result = $this->app->sessionGet('result');
            $numGuesses = $this->app->sessionGet('numGuesses');
            $guesses = $this->app->sessionGet('guesses');

            $resultsReady = TRUE;
        }

        //1st session and no guesses have been made
        else {
            $resultsReady = FALSE;
            
            $this->app->sessionSet('result', NULL);
           
            $this->app->sessionSet('numGuesses', NULL);
            
            $guesses = $this->app->sessionSet('guesses', array());
            
        }
        
        return $this->app->view('index');
    }
    
    
    public function process()
    {
        $this->app->validate([
            'guess' => 'required|numeric|min:0|max:100'
        ]);
        
        //this file will do all of the processing and then set $guesses to the total number of user guesses
        include 'process.php';
        
        $this->app->redirect('/', ['newMessage'=>$data['total_guesses']]);
                
    }
    
    
    public function reset()
    {

        //reset game
        
        //$_SESSION['reset'] = TRUE;
        $this->app->sessionSet('reset', TRUE);
        
        //$_SESSION['guess'] = NULL;
        $this->app->sessionSet('guess', NULL);
        
        unset($_SESSION['guesses']);

        //$_SESSION['number'] = NULL;
        $this->app->sessionSet('number', NULL);
        
        //$_SESSION['result'] = NULL;
        $this->app->sessionSet('result', NULL);
        
        //$_SESSION['numGuesses'] = NULL;
        $this->app->sessionSet('numGuesses', NULL);
        
        $resultsReady = FALSE;

        //header('Location: index.php');
        $this->app->redirect('/');
    }
    
    public function rounds()
    {
        $rounds = $this->app->db()->all('rounds');
        
        //dump($rounds);
        
        return $this->app->view('rounds', ['rounds' => $rounds]);
    }
    
    public function round()
    {
        $roundId = $this->app->param('id');
        
        $round = $this->app->db()->findById('rounds', $roundId);
        
        //dump($roundId);
        
        return $this->app->view('round', ['round' => $round]);
    }
}
