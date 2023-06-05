<?php


namespace App\classes;


class Catagoris
{
    public $categories = [];
    public function __construct()
    {

        $this->categories  = [
            0 => [
                'id'=> 1,
                'name' => 'সর্বশেষ'
            ],
            1 => [
                'id'=> 2,
                'name' => 'বিশেষ সংবাদ'
            ],
            2 => [
                'id' => 3,
                'name' => 'রাজনীতি'
            ],
            3 => [
                'id' => 4,
                'name' => 'অপরাধ'
            ],
            4 => [
                'id' => 5,
                'name' => 'বাংলাদেশ'
            ],
        ];
    }
    public function getAllNews()
    {
        return $this->categories;
    }

}