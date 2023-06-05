<?php


namespace App\classes;


class User
{
    public $users = [], $email, $password;

    public function __construct()
    {
//        $this->email = $post['email'];
//        $this->password = $post['password'];

        $this->users = [
            0 => [
                'id' =>1,
                'name' => 'Mahady Hasan Fahim',
                'email' => 'a@gmail.com',
                'password' => '1',
            ],
            1 => [
                'id' =>2,
                'name' => 'Sajib hasan',
                'email' => 'sh@gmail.com',
                'password' => '123433',
            ],
            2 => [
                'id' =>3,
                'name' => 'Johir',
                'email' => 'johir@gmail.com',
                'password' => '123455',
            ],
        ];
    }

    public function getAllUser()
    {
        return $this->users;
    }


    public function login()
    {
        foreach ($this->users as $user)
        {
            if ($user['email'] == $this->email && $user['password'] == $this->password)
            {
                session_start();
                $_SESSION['id'] = session_id();
                header('Location: action.php?page=home');
            }
        }
        echo 'email or password is incorrect';

    }
}