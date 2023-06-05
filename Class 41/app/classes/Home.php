<?php

namespace  App\classes;
use App\classes\Catagoris;
class Home
{
    public $news,$newses=[],$singleNews,$category, $categories = [];
public  function index(){

    $this->news = new News();
    $this->newses = $this->news->getAllNews();



    return view('home', ['news' => $this->newses, 'categories' => $this->categories]);
}
    public function newsByID($id)
    {
        $this->news = new News();
        $this->singleNews = $this->news->getnewsById($id);
        return view('detail', ['news' => $this->singleNews ]);
    }
    public function categoryNews($id)
    {

        $this->category = new Catagoris();
        $this->categories = $this->category->getAllNews();

        $this->product = new Products();
        $this->products = $this->product->getCategoryProduct($id);


        return view('catagoris', ['categories' => $this->categories, 'news' => $this->newses]);
    }
}