<?php


namespace App\classes;


class HelloWorld
{
    public $message, $firstName, $lastName, $x, $y, $z,$i, $data =[];

    public function __construct()
    {


        $this->message = "Hello World";
        $this->x=10;
        $this->y=10;


       // $this->data =[10, 20, 30,' +012 345 6789', 'info@example.com', true, 100.20];

    }

    public function index()
    {

        $this->data = [
            0 =>[
                'name'  =>'sojib',
                'email' =>'sojibhasan@mail.com',
                'mobile'=> '01555555'
            ],
            1 =>[   'name'  =>'sojib',
                'email' =>'sojibhasan@mail.com',
                'mobile'=> '01555555'
            ],
            2 =>[
                'name'  =>'sojib',
                'email' =>'sojibhasan@mail.com',
                'mobile'=> '01555555'
            ],

        ];
        echo $this->data[3][name];

        //echo $this->data['city'];


//      foreach ($this->data as $key=> $item)
//      {
//          echo '<br/>'.$item;
//      }


     //echo   $this->x;
     //        $this->i = 10;
//        do {
//            echo '<br/>' . $this->i;
//            $this->i++;
//        }while ($this->i < 20);
//
//

//       for ($this-> i = 30; $this->i >= 20; $this->i--)
//       {
//           echo '<br/>'.$this->i;
//       }
//
//
//      $this->z =$this->x + $this->y;
//
//
//       switch ($this->z)
//       {
//           case 10:
//               echo 'Hello World';
//               break;
//           case 20:
//               echo 'Hello Bangladesh';
//               break;
//           case 30:
//               echo 'Hello BITM';
//               break;
//           default:
//               echo 'Hello BASIS';
//       }
//
//
//       elseif($this->z > $this->y)
//       {
//           echo "HELLO BITM";
//       }
//       elseif($this->z < $this->x)
//       {
//           echo "HELLO BASIS";
//     }
//       else
//       {
//           echo 'HELLO PHP';
//       }
//
   }
}