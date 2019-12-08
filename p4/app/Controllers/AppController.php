<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        
        return $this->app->view('index');
    }
    
    public function rounds()
    {
        $rounds = $this->app->db()->all('rounds');
        
        //dump($rounds);
        
        return $this->app->view('rounds', ['rounds' => $rounds]);
    }
    
    public function round()
    {
        return $this->app->view('round');
    }
}
