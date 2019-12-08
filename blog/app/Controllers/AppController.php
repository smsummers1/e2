<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {

        $newTitle = $this->app->old('newTitle', null);
        return $this->app->view('index', ['newTitle'=>$newTitle]);
    }
    
    public function saveNewPost()
    {
        $this->app->validate([
            'title' => 'required',
            'content' => 'required|minLength:255',
        ]);
        
        $title = $this->app->input('title');
        $content = $this->app->input('content');
        
        $data = ['title' => $title, 
                 'content' => $content
                ];
        
        $this->app->db()->insert('posts', $data);
        //dump($title);
        //dump($content);
        
        $this->app->redirect('/', ['newTitle'=>$data['title']]);
    }
    
    public function posts()
    {
        $posts = $this->app->db()->all('posts');
        
        //dump($posts);
        
        return $this->app->view('posts', ['posts' => $posts]);
    }
    
    public function post()
    {
        $postId = $this->app->param('id');
        
        $post = $this->app->db()->findById('posts', $postId);
        
        //dump($postId);
        if(is_null($post)){
            return $this->app->redirect('/posts', ['postNotFound'=>true]);
        }
        
        return $this->app->view('post', ['post' => $post]);
    }
    
}
