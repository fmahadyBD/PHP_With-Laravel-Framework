<?php

namespace App\classes;
use App\classes\Products;
use App\classes\Category;

class Home
{

    public $product, $products = [], $category, $categories = [], $singleProduct;


    public function __construct()
    {
        session_start();
        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();
    }

    public function index()
    {


        $this->product = new Products();
        $this->products = $this->product->getAllProduct();
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
        if (isset($_SESSION['id']))
        {
            return view('calculator' , ['categories' => $this->categories]);
        }
        else
        {
            header('Location: action.php?page=login');
        }
    }
    public  function seriesOne()

    {
        if (isset($_SESSION['id'])) {
            return view('series-one', ['categories' => $this->categories]);
        }
        else
            {
                header('Location: action.php?page=login');
            }
    }
    public  function seriesTwo()
    {
        if (isset($_SESSION['id'])) {
            return view('series-two', ['categories' => $this->categories]);
    }
        else
        {
            header('Location: action.php?page=login');
        }
    }
    public  function seriesThree()
    {
        return view('series-three', ['categories' => $this->categories]);
    }

public function login($massage = null)
{
    if (isset($_SESSION['id'])){
        header('Location: action.php?page=dashboard');
    } else {
        return view('login', ['categories' => $this->categories, 'massage' => $massage]);
    }
}

public function dashboard()
{
    return view('dashboard', ['categories' => $this->categories]);
}
public function logout()
{
    session_start();
    unset($_SESSION['id']);
    header('Location: action.php?page=login');
}

}