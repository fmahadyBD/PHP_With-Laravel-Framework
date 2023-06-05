<?php


namespace App\classes;
use App\classes\User;


class Auth
{

    public $user, $users = [];

    public function __construct()
    {
        session_start();
    }

    public function login($post)
    {
      $this->user  = new User();
      $this->users = $this->user->getAllUser();
      foreach ($this->users as $user)
      {
          if ($user['email'] == $post['email'] && $user['password'] == $post['password'])
          {
              $_SESSION['name'] = $user['name'];
              $_SESSION['id'] = $user['id'];
              header('Location: action.php?page=dashboard');
          }
      }
      return "Sorry .. wrong credential.";
    }
    public function logout()
    {
        unset($_SESSION['name']);
        unset($_SESSION['id']);
        header('Location: action.php?page=home');
    }
}