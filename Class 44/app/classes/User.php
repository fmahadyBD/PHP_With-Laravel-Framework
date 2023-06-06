<?php


namespace app\classes;


class User
{

    public $a=100;
    protected $b=200;
    private $c=300;
    public function add(){
        echo 'in add';
    }
    protected function sub(){
        echo 'in sub';
    }
    private function div(){
        echo 'in div';
    }


}