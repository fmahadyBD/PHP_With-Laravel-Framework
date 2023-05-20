<?php


namespace App\classes;
use App\classes\Blog;


class Home
{
    public $blog,$blogs=[];
    public function index(){
        $this->blog=new Blog();
        $this->blogs=$this->blog->getAllblog();
        return view('home', ['blogs'=>$this->blogs]);
    }
    public function about(){
        require view('about');
    }
    public function contact(){
        require view('contact');
    }

}