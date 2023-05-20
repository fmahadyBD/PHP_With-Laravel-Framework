<?php


namespace App\classes;


class Blog

{
    public $blogs=[];
    public function __construct()
    {
        $this->blogs=[

            0=>[
                'id'                =>1,
                'title'             =>'thi is blog title',
                'description_one'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?',
                'description_tow'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?',
                'image'             =>'blog-1.jpg',
             ],
            1=>[
                'id'                =>2,
                'title'             =>'thi is blog title',
                'description_one'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?',
                'description_tow'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?',
                'image'             =>'about.jpg',

            ],
            2=>[
                'id'                =>3,
                'title'             =>'thi is blog title',
                'description_one'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?',
                'description_tow'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?',
                'image'             =>'blog-2.jgp',

            ],
            3=>[
                'id'=>4,
                'title'=>'thi is blog title',
                'description_one'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?',
                'description_tow'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel?',
                'image'             =>'about.jpg',

            ],

        ];
    }
public function getAllblog(){
        return $this->blogs;
}

}