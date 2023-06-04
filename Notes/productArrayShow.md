
- home php file:
`product_array_in_home_file is passed fromHome`
```powershell


<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($product_array_in_home_file as $product) { ?>
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

- Product  Class:<br\>
`return products_array to Main class`
 ```powershell
class Products
{
    public $products_array = [], $data = [];

    public function __construct()
    {
        $this->products_array = [
            0 => [
                'id'            => 1,
                'category_id'   => 1,
                'name'          => 'New Model Bike',
                'price'         => 'TK. 4,75000',
                'description'   => '',
                'image'         => '575458-yamaha-bikes.jpg',
                
                  ],
                 ];
    }
    public function getAllProduct()
    {
        return $this->products_array;
    }


}

```

- Home class:

 ```powershell
public $product_Homeclass_Variabel, $products_Home_class_Array = [],$news,$newsArray=[];

    public function index()
    {

        $this->product_Homeclass_Variabel = new Products();
        $this->products_Home_class_Array  = $this->product_Homeclass_Variabel->getAllProduct();
        
        
        
        //ignor two line, this is for nav working, and it discussion in previousfile
        $this->news=new News();
        $this->newsArray=$this->news->getnews();

        return view('home', ['product_array_in_home_file' => $this->products_Home_class_Array,'nav'=>$this->newsArray]);
    }

```
