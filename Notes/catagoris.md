header.php file:
` we make a fore each loop for findling all value and we passed it in action.php and request for category page and we passed id.  `
`id will come form array catargory gobale`

```powershell
 <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                <ul class="dropdown-menu">
                    <?php foreach ($categories as $category) { ?>
                    <li><a href="action.php?page=category&id=<?php echo $category['id']; ?>" class="dropdown-item"><?php echo $category['name']; ?></a></li>
                    <?php } ?>
                </ul>
            </li>

```
- action.php
` it call categoryProduct from home and passed id.`

```poweshell
if (isset($_GET['page']))
{

  if ($_GET['page'] == 'category')
    {
        $home->categoryProduct($_GET['id']);
    }
}

```
- Home.php class:
` we called Category claas's getCategoryProduct() and passed id that will recived from action.php `
` we return  "   categories' => $this->categories " for dropdown `
` we return "	products' => $this->products " for categories product `
```poweshell

    public function categoryProduct($id)
    {

        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();

        $this->product = new Products();
        $this->products = $this->product->getCategoryProduct($id);


        return view('category', ['categories' => $this->categories, 'products' => $this->products]);
	
    }

```

- Category.php class:

 `For showing dropdown and taking value by id`

```powershell
<?php

namespace App\classes;

class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            0 => [
                'id'=> 1,
                'name' => 'Electronics'
            ],
            1 => [
                'id'=> 2,
                'name' => 'Man Fashion'
            ],
            2 => [
                'id' => 3,
                'name' => 'Sport item'
            ],
            3 => [
                'id' => 4,
                'name' => 'Women Fashion'
            ],
            4 => [
                'id' => 5,
                'name' => 'Foods item'
            ],
        ];
    }
    public function getAllCategory()
    {
        return $this->categories;
    }
}

```

- Home.php class:
` we called Category claas's getCategoryProduct() and passed id that will recived from action.php `
` we return  "   categories' => $this->categories " for dropdown `
` we return "	products' => $this->products " for categories product `
```poweshell

    public function categoryProduct($id)
    {

        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();

        $this->product = new Products();
        $this->products = $this->product->getCategoryProduct($id);


        return view('category', ['categories' => $this->categories, 'products' => $this->products]);
	
    }

```
-Products.php class:

`we recived d value form Home class. and check it by products array id. if it fouund then passed`
``` powershell:


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

        ];
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
```

