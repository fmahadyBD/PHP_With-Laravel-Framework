
- hadder php file:
`nav is passed fromHome`
```powershell
<ul class="navbar-nav">
                <?php foreach ($nav as $product){?>
                <li><a class="nav-link"><?php echo $product['id'];?></a></li>
                <?php }?>
            </ul>

```
- clicked to goto
```powershell
 <ul class="navbar-nav">
            <?php foreach ($navData as $menu){?>
            <li><a class="nav-link" href="action.php?page=<?php echo $menu['title'];?>"><?php echo $menu['id']; ?></a></li>
            <?php }?>
        </ul>

```

- News Class:
 ```powershell
class News
{
    public $anews=[],$data;
    public function __construct()
    {
    $this->anews=[
        0        =>[
                'id'        =>22,
                "title"     =>'This is the news',
        ],
    ];
    }
    public function getnews(){
        return $this->anews;
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
        $this->news=new News();
        $this->newsArray=$this->news->getnews();

        return view('home', ['product_array_in_home_file' => $this->products_Home_class_Array,'nav'=>$this->newsArray]);
    }

```
