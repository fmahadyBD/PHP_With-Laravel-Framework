<?php


namespace App\classes;


class User
{

    public $userDataArray=[],$email,$password;
    public function __construct()
    {
//        $this->email=$post['email'];
//        $this->password=$post['password'];
        $this->userDataArray=[
            0 =>[
                'id'        =>'1',
                'name'      =>"Antik Kumar desh",
                'email'     =>'aj@gmail.com',
                'password'  =>'1',
            ],
            1 =>[
                'id'        =>'2',
                'name'      =>'Arman',
                'email'     =>'a@gmail.com',
                'password'  =>'12345',


            ],
            2 =>[

                'id'        =>'3',
                'name'      =>'yo',
                'email'     =>'y@gmail.com',
                'password'  =>'12345',

            ],

        ];

    }
    public function getAllUser(){
        return $this->userDataArray;
    }
    public function login(){

        foreach ($this->userDataArray as $user){
            if($user['email']==$this->email && $user['password']==$this->password){
//                echo 'Your are login';
//                exit();
                session_start();
                $_SESSION['id']=session_id();

                header('location:action.php?page=home');
            }

        }
        echo 'email or paswword incorect';
        exit();

    }

}