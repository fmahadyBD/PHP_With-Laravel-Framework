<?php


namespace App\classes;


class Home
{
    public $students = [];

    public function __construct()
    {
        $this->students =[
            0=>[
                'id' =>1,
                'name' =>'Sojib',
                'email' =>'sojibhasan@gmail.com',
                'mobile' =>[
                    'personal' =>'019543333333',
                    'parent' =>'0195452552222'
                ],
                'image' =>'1.jg'
            ],
            1=>[
                'id' =>2,
                'name' =>'Hasan',
                'email' =>'sojibhasan@gmail.com',
                'mobile' =>[
                    'personal' =>'019543333333',
                    'parent' =>'019545255'
                ],
                'image' =>'2.jg'
            ],
            2=>[
                'id' =>3,
                'name' =>'ovi',
                'email' =>'sojibhasan@gmail.com',
                'mobile' =>[
                    'personal' =>'019543333333',
                    'parent' =>'0195452552255'
                    ],
                'image' =>'3.jg'
            ],
        ];
    }
    public function index()
    {

       return view('home',['students' => $this->students]);

//
//        $data = ['name' => 'BITM', 'city' =>'Dhaka'];
//
//        extract($data);
//
//
//
//        echo $data['name'];


//       // echo '<pre>';
//        //var_dump($this->students);
//        //print_r($this->students);
//
//
//
//
//        foreach ($this->students as $student)
//        {
//            foreach ($student as $item)
//            {
//                if (is_array($item))
//                {
//                    foreach ($item as $value)
//                    {
//                        echo $value.'';
//                    }
//                }
//                else
//                {
//                    echo $item.'';
//                }
//            }
//            echo '<br/>';
//        }
//
//
//
//
//
//           //echo '<br/>';
//            //echo $student['name']. '<br/>'.$student['email'].'<br/>'.$student['mobile'];
        }
          //echo  $this->students[0]['name'];

}