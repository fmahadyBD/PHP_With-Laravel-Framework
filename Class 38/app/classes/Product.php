<?php


namespace App\classes;


class Product
{
    public $products = [], $data = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id'          => 1,
                'category_id' => 2,
                'name'        => 'New Fashionable T Shirt',
                'price'       => 1500,
                'description' => '',
                'image'       => 'assets/img/product/1.jpg',
            ],
            1 => [
                'id'          => 2,
                'category_id' => 2,
                'name'        => 'Smart Jeans Pant',
                'price'       => 2200,
                'description' => '',
                'image'       => 'assets/img/product/2.jpg',
            ],
            2 => [
                'id'          => 3,
                'category_id' => 2,
                'name'        => 'Formal Shirt for Man',
                'price'       => 3000,
                'description' => '',
                'image'       => 'assets/img/product/3.jpg',
            ],
            3 => [
                'id'          => 4,
                'category_id' => 1,
                'name'        => 'New Sony Mobile',
                'price'       => 45000,
                'description' => '',
                'image'       => 'assets/img/product/4.jpg',
            ],
            4 => [
                'id'          => 5,
                'category_id' => 1,
                'name'        => 'New Samsung Mobile',
                'price'       => 35000,
                'description' => '',
                'image'       => 'assets/img/product/5.jpg',
            ],
            5 => [
                'id'          => 6,
                'category_id' => 3,
                'name'        => 'Cricket Bat',
                'price'       => 2000,
                'description' => '',
                'image'       => 'assets/img/product/6.jpg',
            ],
            6 => [
                'id'          => 7,
                'category_id' => 4,
                'name'        => 'New Women Hand Bag',
                'price'       => 1500,
                'description' => '',
                'image'       => 'assets/img/product/7.jpg',
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
            if ($product['category_id'] == $id)
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
            if ($product['id'] == $id)
            {
                return $product;
            }
        }

    }
}