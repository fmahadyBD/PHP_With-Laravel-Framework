<?php


namespace App\classes;


abstract class Student
{
    public $p=150;
    public $q=60;
    public function test(){
        echo $this->p +$this->q;
    }

    public abstract function demo();

}