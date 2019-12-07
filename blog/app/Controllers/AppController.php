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
    
    public function posts()
    {
        return $this->app->view('posts');
    }
    
    public function post()
    {
        return $this->app->view('post');
    }
    
}
