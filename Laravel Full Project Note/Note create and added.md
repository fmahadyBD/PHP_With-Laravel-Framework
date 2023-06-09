
## Create your Project 
`shif+right click->powershell` Goto the file location of your flie and open the terminal:

```powershell
 composer create-project laravel/laravel nameOfYourProject
```
## Run your Project 
- Goto project file loaction path and type cmd: and command:
```powershell
php artisan serve
```
`Another way: Xammp open and goto project public file`

<hr/>

### Make HomeControler:

```powershell:
php artisan make:controller HomeControler
```
- use it in route.web 

### Seleting MVC of Route

```powershell
Route::get('/', [HomeControler::class,'index'] )->name('home');
Route::post('/', [HomeControler::class,'addProduct'] )->name('home');


```
- make index function in HomeCrontroler class:

```poweshell

class HomeControler extends Controller
{
    public function index(){
        return view('home');
    }
    
 }
 ```
 - Make home.blade in view

### home.blade:

 - Step:1: `make master.blade.php`

```powershell:
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">

</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li><a href="" class="nav-link">Home</a> </li>
        </ul>
    </div>
</nav>

@yield('body')


<script src="{{asset('/')}}js/bootstrap.boundle.js "></script>
</body>
</html>

```
 - Step 2:`make home.blade.php`
```powershell

@extends('master')
@section('body')

    <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col-md-8 mx-auto">
                   <div class="card card-body">
                       <h1 class="text-center text-secondary">Add Product</h1>
                       <p class="text-success text-center">{{session('message')}}</p>
                       <hr class="bg-info-subtle py-2"/>
                       <form action="{{asset('home')}}" method="POST">
                           @csrf
                           <div class="row mb-3">
                               <label class="col-md-3">Product Name</label>
                               <div class="col-md-9">
                                   <input type="text" class="form-control" name="product_name">
                               </div>
                           </div>
                           <div class="row mb-3">
                               <label class="col-md-3">Image</label>
                               <div class="col-md-9">
                                   <input type="file" class="form-control" name="product_image">
                               </div>
                           </div>
                           <div class="row mb-3">
                               <label class="col-md-3"></label>
                               <div class="col-md-9">
                                   <input type="submit" class="btn btn-secondary float-end " value="Add The product">
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </section>

@endsection
```


# Make database:
- step 1:

<br>
`make model for conection to data and from`

```powershel
php artisan make:model Product -m
```
- If you forget type -m
```powershel
php artisan make:migration create_products_table --create=products
```
## `Node: class name willbe singular:

- Step 2 in the margeate Product:
```powershell



   class Product extends Model
   {
       use HasFactory;
          private static $product, $image, $imageName, $directory, $imageUrl;
   
       public static function imageUpload($request)
       {
           self::$image      = $request->file('product_image');
           self::$imageName  = self::$image->getClientOriginalName();
           self::$directory  = "img/upload/";
           self::$image->move(self::$directory, self::$imageName);
           return self::$directory.self::$imageName; // img/upload/fising-coupe.jpeg
       }
   
       public static function newProduct($request)
       {
           self::$imageUrl = self::imageUpload($request);
   
           self::$product = new Product();
           self::$product->product_name        =$request->product_name;
           self::$product->product_image       = self::$imageUrl;
           self::$product->save();
   
   }
   }
 ```

`Request from from, and 1st is the name of the database colum name`
- Step 3:

`for creating Database`<br/>
`.en file and give name of database that youu need to create`<br/>
`Now type this for create the table in your database:`
<hr/>
`Make migrate table's colom`

```powershell
   <?php
   
   namespace App\Models;
   
   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;
   
   class Student extends Model
   {
       use HasFactory;
       public static $student, $image,$imageName,$imageUrl, $directory;
       public static function imageUpload($requuest){
           self::$image    =$requuest->file('form_image');
           self::$imageName    =self::$image->getClientOriginalName();
           self::$directory    ="image/upload";
           self::$image->move(self::$directory,self::$imageName);
           return self::$directory.self::$imageName;
       }
       public static function addnew($request){
           self::$imageUrl=self::imageUpload($request);
           self::$student=new Student();
           self::$student->name        =$request->name;
           self::$student->image       =self::$imageUrl;
           self::save();
   
   }
   }

```


```powershell
php artisan migrate
```
#### If have chage in model class you can upload the database
```powershell
php artisan migrate:fresh
```
### Naw make addProduct in HomeControler and call the model class:

``` powershell

 public function addProduct(Request $request){
        Product::add($request);
        return back()->with('message','Added');
    }
    
 ```
