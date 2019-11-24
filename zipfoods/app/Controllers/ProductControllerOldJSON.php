<?php
namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    private $products;
    
    public function __construct($app)
    {
        parent::__construct($app);
        
        $this->products = new Products($this->app->path('database/products.json'));
    }
    
    
    public function index()
    {   
        
        return $this->app->view('products.index', [
            'products' => $this->products->getAll()
        ]);
    }
    
    public function show()
    {
        $id = $this->app->param('id');
        
        $product = $this->products->getById($id);
        
        if(is_null($product)) 
        {
            return $this->app->view('products.missing');
        }
        
        $confirmationName = $this->app->old('confirmationName');
        
        return $this->app->view('products.show', [
            'product' => $product,
            'confirmationName' => $confirmationName
        ]);
        
    }
    
    public function saveReview()
    {
        //dump($_POST);
        $this->app->validate([
        'name' => 'required',
        'review' => 'required|minLength:200'
    ]);

        
        $id = $this->app->input('id');
        $name = $this->app->input('name');
        $review = $this->app->input('review');
        
        #Todo:  Persist the review to the database
        
        #send user back to the product they were leaving the comment for.
        $this->app->redirect('/product?id='.$id, [ 'confirmationName' => $name ]);

    }
}




