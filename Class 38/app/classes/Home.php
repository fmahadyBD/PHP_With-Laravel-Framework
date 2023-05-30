<?php


namespace App\classes;
use App\classes\Product;
use App\classes\Category;


class Home
{
    public $product, $products = [], $category, $categories = [], $singleProduct;

    public function __construct()
    {
        $this->category   =new Category();
        $this->categories = $this->category->getAllCategory();
    }

    public function index()
    {
        $this->product    = new Product();
        $this->products   = $this->product->getAllProduct();

        return view('home', ['products' => $this->products, 'categories' => $this->categories]);
    }

    public function categoryProduct($id)
    {
        $this->product    = new Product();
        $this->products   = $this->product->getCategoryProduct($id);

        return view('category', ['categories' => $this->categories, 'products' => $this->products]);
    }

    public function productDetail($id)
    {
        $this->product = new Product();
        $this->singleProduct = $this->product->getProductById($id);

        return view('detail', ['categories' => $this->categories, 'product' => $this->singleProduct]);
    }

    public function fullName()
    {
        return view('full-name', ['categories' => $this->categories]);
    }

    public function calculator(){
        return view ('calculator',['categories' => $this->categories] );
    }
    public function series(){
        return view('series',['categories' => $this->categories]);
    }
}