<?php


namespace App\classes;
use App\classes\Blog;


class Home
{
    public $blog,$blogs=[],$singleBlog=[];
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
    public function detail($id){
        $this->blog=new Blog();
        $this->singleBlog =$this->blog->getBlogByID($id);
        return view('detail',['blog'=>$this->singleBlog]);
    }

}