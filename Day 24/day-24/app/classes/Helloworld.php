<?php


namespace App\classes;


class Helloworld
{


    public $message;
    public function __construct()
    {
        $this->message="hello world";
    }
    public function index(){
        echo $this->message;
    }

}