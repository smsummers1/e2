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
        $posts = $this->app->db()->all('posts');
        
        //dump($posts);
        
        return $this->app->view('posts', ['posts' => $posts]);
    }
    
    public function post()
    {
        return $this->app->view('post');
    }
    
}
