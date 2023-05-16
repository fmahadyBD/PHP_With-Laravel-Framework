<?php


namespace app\classes;


class HelloWorld
{
public  $message,$x,$y,$z,$i,$data=[];
public function __construct()
{
    $this->message="Mahady Hasan Fahim <br>";
    $this->x=10;
    $this->y=20;
    $this->data=[10,20,30,'01722','infomar@gmail.com',true,10,2];
}
public function index(){
//    echo $this->message;
//    $this->z=$this->x+$this->y;
//    if($this->z >50){
//        echo $this->z;
//    }else{
//        echo "hello boss this is z is not gether then 50";
//    }H

//    if($this->x > $this->y){
//        echo $this->z;
//    }elseif($this->z >$this->x){
//        echo "Hello BITM";
//   }else
//    {
//        echo "Hello PHP";
//    }

//    switch ($this->z){
//        case 10:
//            echo "hello World";
//            break;
//        case 20:
//            echo "hello Bangladesh";
//            break;
//        case 30:
//            echo "Hello BITM";
//            break;
//        default:
//            echo "Hello BASIS";
//            break;
//
//    }
//    for($this->i=10;$this->i<15;$this->i++){
//        echo $this->message;
//    }
//    for($this->i=10;  $this->i<15&&$this->i!=13;$this->i++){
//        echo $this->message;
//    }

//    $this->i=10;


//    while ($this->i>20){
//        echo '<br/>'.$this->i;
//        $this->i++;
//    }
//    do{
//        echo"<br/>". $this->i;
//        $this->i++;
//
//    }while($this->i<20);

//    echo $this->data[0];
//
//    foreach ($this->data as $item) {
//        echo '<br/>'.$item;
//
//    }
    foreach ($this->data as $key=> $item) {
        echo '<br/>'.$key;

}








}
}
