<?php


namespace App\classes;


class Series
{
    public $i, $startingNumber, $endingNumber, $result;

    public function __construct($post)
    {
        $this->startingNumber=$post['starting_number'];
        $this->endingNumber=$post['ending_number'];

    }

    public function seriesOne()
    {
       for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
       {
          // echo $this->i.' ';
              $this->result .=$this->i.' ';

       }
       header("Location:action.php?page=series_one&result=$this->result");
    }
}