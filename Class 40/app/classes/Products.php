<?php

namespace App\classes;
class Products
{
    public $products = [], $data = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id'            => 1,
                'category_id'   => 1,
                'name'          => 'New Model Bike',
                'price'         => 'TK. 4,75000',
                'description'   => '',
                'image'         => '575458-yamaha-bikes.jpg',
            ],
            1 => [
                'id'            => 2,
                'category_id'   => 2,
                'name'          => 'New Fashionable T Shirt',
                'price'         => 'TK. 2500',
                'description'   => '',
                'image'         => 'd56ba97af6e4f5a7e71ce71bd9049694.jpg',
            ],
            2 => [
                'id'            => 3,
                'category_id'   => 2,
                'name'          => 'New Fashionable Pant',
                'price'         => 'TK. 7500',
                'description'   => '',
                'image'         => 'ELkopUFU4AEMr1X.jpg',
            ],
            3 => [
                'id'            => 4,
                'category_id'   => 3,
                'name'          => 'New Cricket Bat',
                'price'         => 'TK. 15000',
                'description'   => '',
                'image'         => 'highlight-SGBat.webp',
            ],
            4 => [
                'id'            => 5,
                'category_id'   => 4,
                'name'          => 'New Hand Beg',
                'price'         => 'TK. 5000',
                'description'   => '',
                'image'         => '61ZnRVZ9S-L._UY695_.jpg',
            ],
            5 => [
                'id'            => 6,
                'category_id'   => 5,
                'name'          => 'Big Barger',
                'price'         => 'TK. 750',
                'description'   => '',
                'image'         => 'istockphoto-1305146651-170667a.jpg',
            ],
            6 => [
                'id'            => 7,
                'category_id'   => 5,
                'name'          => 'Hot Frid Rice',
                'price'         => 'TK. 350',
                'description'   => '',
                'image'         => 'fried-rice (1).jpg',
            ],
        ];
    }
    public function getAllProduct()
    {
        return $this->products;
    }
    public function getCategoryProduct($id)
    {
        foreach ($this->products as $product)
        {
            if($product['category_id'] == $id)
            {
                array_push($this->data, $product);
            }
        }
        return $this->data;

    }
    public function getProductById($id)
    {
        foreach ($this->products as $product)
        {
          if($product['id'] == $id)
          {
              return $product;
          }
        }
    }
}