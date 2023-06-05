<?php


namespace App\classes;


class Series
{
    public $i, $startingNumber, $endingNumber, $resultString, $result,$output,$res4;

    public function __construct($post)

    {
        $this->startingNumber=$post['starting_number'];
        $this->endingNumber=$post['ending_number'];

     if( ($this->startingNumber) > ($this->endingNumber)){
            $this->endingNumber=$post['starting_number'];
            $this->startingNumber=$post['ending_number'];

        }


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
    public function seriesThree(){
        $this->resultString=' ';
        for($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++){
//            $this->result .=$this->i.'+';
            $this->resultString.=$this->i.' + ';
            $this->result=$this->result+$this->i;

        }
        $this->output=rtrim( $this->resultString,' + ');
        $this->result=$this->output.'='.$this->result;
        $this->res4 =base64_encode($this->result);
        header("Location:action.php?page=series_three&result=$this->res4");

    }
}