<?php


namespace App\classes;


class Calculator
{
public $fnum,$lnum,$result,$choice;
public function __construct($recived)
{

    $this->fnum     =$recived['first_number'];
    $this->lnum     =$recived['second_number'];
    $this->choice   =$recived['choice'];
}

    public function myCalu(){
//    echo '<pre>';
//    print_r($recived);
//    exit();

//    if($this->choice=="+"){
//        $this->result   =$this->fnum + $this->lnum ;
//    }elseif ($this->choice=="-"){
//        $this->result   =$this->fnum - $this->lnum ;
//    }
//    elseif ($this->choice=="*"){
//        $this->result   =$this->fnum * $this->lnum ;
//    }
//
//    elseif ($this->choice=="/"){
//        $this->result   =$this->fnum / $this->lnum ;
//    }
//
//    elseif ($this->choice=="%"){
//        $this->result   =$this->fnum % $this->lnum ;
//    }
    switch ($this->choice){
        case '+':
            $this->result   =$this->fnum + $this->lnum ;
            break;
        case '-':
            $this->result   =$this->fnum - $this->lnum ;
            break;
        case '/':
            $this->result   =$this->fnum / $this->lnum ;
            break;
        case '*':
            $this->result   =$this->fnum * $this->lnum ;
            break;
        case '%':
            $this->result   =$this->fnum % $this->lnum ;
            break;
        default:
            break;

    }


    header('Location: action.php?page=calculator&result='.$this->result);


}
}