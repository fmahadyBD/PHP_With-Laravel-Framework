<?php


namespace App\classes;
use App\classes\User;



class Auth
{
    public $userObj,$userArray=[];
    //data recived from action.php
    public function login($dataRecived)
    {
//        echo 'Hello login';

        $this->userObj=new User();
        $this->userArray=$this->userObj->getAllUser();
        //ctl mouse click
////        echo'<prev>';
//        print_r($dataRecived);


        foreach ($this->userArray as $item) {

            if($item['email']==$dataRecived['email'] && $item['password']==$dataRecived['password']){
                header('Location:action.php?page=dashboard');
            }
            else{
                return "Sorry Sir ";
            }
            //return to action.php
        }



    }
    public function logout(){
        header('Location:action.php?page=home');

    }


}