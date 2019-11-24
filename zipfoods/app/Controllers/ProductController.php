<?php
namespace App\Controllers;

//don't need this class since it is referring to the 
//class pulling from the json file.
//use App\Products;

class ProductController extends Controller
{
    private $products;
    
    public function __construct($app)
    {
        parent::__construct($app);
        
        //using database now so we don't need this object 
        //that is utilizing the json file
        //$this->products = new Products($this->app->path('database/products.json'));
    }
    
    
    public function index()
    {    
        
        return $this->app->view('products.index', [
            'products' => $this->app->db()->all('products')
        ]);
    }
    
    public function show()
    {
        $id = $this->app->param('id');
        
        //this is pulling from the json file
        //$product = $this->products->getById($id);
        
        #if no id is present, send the user to the products page
        if (is_null($id)){
            $this->app->redirect('/products');
        }
        
        
        //load the product details
        //this is pulling from the database
        $product = $this->app->db()->findById('products', $id);
        
        //load the review details
        //pulling from database
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);
        
        //dump($reviews);

        
        if(is_null($product)) 
        {
            return $this->app->view('products.missing');
        }
        
        $confirmationName = $this->app->old('confirmationName');
        
        return $this->app->view('products.show', [
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName
        ]);
        
    }
    
    public function saveReview()
    {
        //dump($_POST);
        $this->app->validate([
        'name' => 'required',
        'content' => 'required|minLength:200'
    ]);

        //this is the product_id for the review
        $id = $this->app->input('id');
        $name = $this->app->input('name');
        $content = $this->app->input('content');
        
        $data = [
            'name' => $name, 
            'content' => $content, 
            'product_id' => $id
        ];
        
        #insert review form data into the database
        $this->app->db()->insert('reviews', $data);
        
        #send user back to the product they were leaving the comment for.
        $this->app->redirect('/product?id='.$id, [ 'confirmationName' => $name ]);

    }
}




