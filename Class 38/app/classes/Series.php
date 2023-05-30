<?php


namespace App\classes;


class Series
{
    public $fnum,$enum,$res;
    public function __construct($postRecived)
    {
        $this->fnum  =$postRecived['StartNumber'];
        $this->enum  =$postRecived['endNumber'];
        $this->res   =$postRecived['choice'];

    }
    public function seriesFun(){
        while ($this->fnum!=$this->enum){
            $this->res=$this->fnum;

                echo '<pre>';
             print_r($this->fnum);

             exit();


        }


    }

}