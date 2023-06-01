<?php


namespace App\classes;


class FullName
{
    public $firstName, $lastName, $fullName;
    public function makeFullName($post)
    {
        $this->firstName = $post['first_name'];
        $this->lastName  = $post['last_name'];
        $this->fullName  = $this->firstName.' '.$this->lastName;

        header('Location: action.php?page=full_name&message='.$this->fullName);
    }
}