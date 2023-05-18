<?php


namespace App\classes;
use App\classes\Blog;

class Home
{
    public $blog,$blogs=[];


    public function index()
    {
        $this->blog  = new Blog();
        $this->blogs = $this->blog->getAllblogs();
    return view('home',['blogs'=>$this->blogs]);

}

public  function about()
{
    return view('about');
}

public  function service()
{
    return view('service');

}

}