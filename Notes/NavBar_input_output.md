
- hadder php file:
`action.php?page=full_name is passed to action.php file`
```powershell
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
                <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
               <li><a href="action.php?page=full_name" class="nav-link">Full Name</a></li>
        </ul>
    </div>
</nav>

```

- action.php:
- `1. if request full_name ,then it return fullName() from Home`
 ```powershell
<?php
require_once 'vendor/autoload.php';

use App\classes\Home;

use App\classes\FullName;


$home = new Home();

if (isset($_GET['page']))
{

    if ($_GET['page'] == 'home')
    {
        $home->index();
    }

    elseif ($_GET['page'] == 'full_name')
    {
        $home->fullName();
    }


}

elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName();
    $fullName->makeFullName($_POST);

}


```

- Home class:
` fullName() function return full-name.php file for showing the page`

 ```powershell
<?php

namespace App\classes;

class Home
{

    public $product, $products = [], $category, $categories = [], $singleProduct;

    public function index(){

        return view('home');
    }
    public function fullName()
    {
        return view('full-name');
    }

}


```
- full-name.php file:
<br>

`from will recived after clicking the btn in action.php . and it is a post method, so we can get value from it`<br>
`name="" it like variable,id. we take by this name`<br>

` 
isset($POST['button name'])`
`
- Action.php will recevied by it:
 ```powershell
elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName();
    $fullName->makeFullName($_POST);

}
```
- Now full-name.php:

 ```powershell
<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1 class="text-center">Full Name Program</h1>
                    <hr/>


                    <form action="action.php" method="post">


                        <div class="row mb-3">
                            <label class="col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="first_name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="last_name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Full Name</label>
                            <div class="col-md-9">
                            
                            
                                <input type="text" class="form-control" value="<?php echo isset($_GET['message']) ? $_GET['message'] : '' ?>" name=""/>
                                
                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="full_name_btn" value="Submit"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>


```
- FullName class:


 ```powershell
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


```



