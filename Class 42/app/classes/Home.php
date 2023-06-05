<?php

namespace App\classes;
use App\classes\Products;
use App\classes\Category;

class Home
{

    public $product, $products = [], $category, $categories = [], $singleProduct;

    public function index()
    {
//        $x=12589;
//        $p=rand(100,200);
//        $y=base64_encode($x).$p;
//        echo $y;
//        exit();

//        session_start();
//        $_SESSION['name']='BITM';

        $_SESSION['name']='Rofiqul Islam';

        $this->product = new Products();
        $this->products = $this->product->getAllProduct();

        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();

        return view('home', ['products' => $this->products, 'categories' => $this->categories]);
    }

    public function categoryProduct($id)
    {

        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();

        $this->product = new Products();
        $this->products = $this->product->getCategoryProduct($id);


        return view('category', ['categories' => $this->categories, 'products' => $this->products]);
    }





//    public $product, $products = [], $category, $categories = [], $singleProduct;

    public function productDetail($id)
    {
        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();

        $this->product = new Products();
        $this->singleProduct = $this->product->getProductById($id);

        return view('detail', ['categories' => $this->categories, 'product' => $this->singleProduct ]);
    }
    public function fullName()
    {
        return view('full-name', ['categories' => $this->categories]);
    }

    public function calculator()
    {
        return view('calculator' , ['categories' => $this->categories]);
    }
    public  function seriesOne()
    {
        return view('Series_one', ['categories' => $this->categories]);
    }
    public  function seriesTwo()
    {
        return view('series_two', ['categories' => $this->categories]);
    }
    public  function seriesThree()
    {
        return view('series_three', ['categories' => $this->categories]);
    }
    public function login($message=null){
//$message=null menas it will be or not will, there two time call the function one it parametter $message='

        return view('login',['categories' => $this->categories,'message'=>$message]);

    }
    public function logout(){
       session_start();
       unset($_SESSION['id']);
       header('location:action.php?page=login');

    }
    public function dashboard(){
        return view('dashboard',['categories'=>$this->categories]);
    }


}