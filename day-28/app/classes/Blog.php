<?php


namespace App\classes;


class Blog
{
    public $blogs =[];
    public function __construct()
    {
        $this->blogs=[
            0=>[
                'id'=>1,
                'title'             =>  'This is blog title one',
                'description_one'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?',
                'description_tow'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?',
                'image'             =>  'blog-1.jpg',
            ],
            1=>[
                'id'=>2,
                'title'             =>  'This is blog title two',
                'description_one'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?',
                'description_tow'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?',
                'image'             =>  'blog-2.jpg',
            ],
            2=>[
                'id'=>3,
                'title'             =>  'This is blog title three',
                'description_one'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?',
                'description_tow'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?',
                'image'             =>  'about.jpg',
            ],
            3=>[
                'id'=>4,
                'title'             =>  'This is blog title four',
                'description_one'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?',
                'description_tow'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptas?',
                'image'             =>  'about.jpg',
            ],
        ];

    }

    public function getAllblogs()
    {
        return $this->blogs;
    }
}