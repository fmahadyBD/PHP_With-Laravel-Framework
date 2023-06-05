


- home.php{ ` if button will cliced. then page=detail and it's id will be passed to action.php  ` 

```powershell
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="assets/img/product/<?php echo $product['image']; ?>" height="250" alt=""/>
                    <div class="card-body">
                        <h4><?php echo $product['name']; ?></h4>
                        <p class="fw-bold"><?php echo $product['price']; ?></p>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <hr/>
                        <a href="action.php?page=detail&id=<?php echo $product['id'];?>" class="btn btn-success">Detail</a>
                    </div>
                </div>
            </div>
    <?php } ?>
        </div>
    </div>
</section>
```
- action.php `it will called productdetaile from Home class and passed
if`

```powershell


  elseif ($_GET['page'] == 'detail')
    {
        $home->productDetail($_GET['id']);
    }

```


- Home class `it recived a value id that passed from action.php
  and return detial page and value from Products class.`

```powershell

    public function productDetail($id)
    {
     
        $this->product = new Products();
        $this->singleProduct = $this->product->getProductById($id);

        return view('detail', ['product' => $this->singleProduct ]);
		//'product'is like gobale we useed it in detail.php for finding product'
    }
```

- Product class:

```powershell


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
  
  - detail.php:

```powershell

<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="assets/img/product/<?php echo $product['image']; ?>" alt=""/>
                    <div class="card-img-overlay"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $product['name']; ?></h1>
                    <h4><?php echo $product['price']; ?></h4>
                    <p><?php echo $product['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>

```
  
  



