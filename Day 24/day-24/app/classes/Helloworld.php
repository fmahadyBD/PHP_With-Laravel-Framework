<?php


namespace App\classes;


class Helloworld
{


    public $message,$firstName,$lastName;
    public function __construct()
    {
        $this->message="hello in constructor";
    }
    public function index(){
        $this->firstName="Mahady Hasan";
        $this->lastName="Fahim";
//        echo $this->message;
        echo  gettype($this->firstName);

       // echo'My Name: <br/>'. $this->firstName.'&nbsp; &nbsp;&nbsp;'.$this->lastName;// concate
    }

}
