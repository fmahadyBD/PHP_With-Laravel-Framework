<?php


namespace App\classes;


class Series
{
    public $i, $startingNumber, $endingNumber, $result, $resultString, $output, $res, $choice, $odd, $even;

    public function __construct($post)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber  = $post['ending_number'];
        $this->choice = $post['choice'];

    }

    public function seriesOne()
    {
        if ($this->startingNumber < $this->endingNumber) {
            for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
                $this->result .= $this->i . ' ';
            }
        }
            else
            {
                for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
                {
                    $this->result .= $this->i.' ';
                }
            }


       header("Location: action.php?page=series_one&result=$this->result");
    }
    public function seriesTwo()
    {
        if ($this->choice == '1') {

            for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
                if ($this->i % 2 != 0) {
                    $this->odd .= $this->i . ' ';
                }
            }
            header("Location: action.php?page=series_two&result=$this->odd");

        }
        elseif ($this->choice == '2'){

                for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
                    if ($this->i % 2 == 0) {
                        $this->even .= $this->i . ' ';
                    }
                }
            header("Location: action.php?page=series_two&result=$this->even");

        }


    }
    public function seriesThree()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->resultString .= $this->i. ' + ';
            $this->result = $this->result + $this->i;
        }
        $this->output = rtrim($this->resultString, ' + ');
        $this->result = $this->output.'='.$this->result;
        $this->res =base64_decode($this->result);

        header("Location: action.php?page=series_three&result=$this->result=$this->res");
    }
}