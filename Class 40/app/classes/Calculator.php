<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $secondNumber, $choice, $result;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->secondNumber  = $post['second_number'];
        $this->choice       = $post['choice'];
    }

    public function myCalculator()
    {

        switch ($this->choice)
        {
            case '+':
                $this->result =$this->firstNumber + $this->secondNumber;
                break;

            case '-':
                $this->result =$this->firstNumber - $this->secondNumber;
                break;
            case '*':
                $this->result =$this->firstNumber * $this->secondNumber;
                break;
            case '/':
                $this->result =$this->firstNumber / $this->secondNumber;
                break;
            case '%':
                $this->result =$this->firstNumber % $this->secondNumber;
                break;
            default;
                break;

        }



        header("Location: action.php?page=calculator&result=$this->result&first_number=$this->firstNumber&second_number=$this->secondNumber");
    }
}