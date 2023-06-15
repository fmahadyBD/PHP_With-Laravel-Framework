### Go to the web:
```powershell
https://jetstream.laravel.com/3.x/introduction.html

```
### The install:
```powershell
   composer require laravel/jetstream
```
### We need view: 
```powershell
php artisan jetstream:install livewire



```
### Make A tabile in data base:
```powershell
php artisan migrate
```

#### Larave --> routs--->routs.php--->in here we will find login:

<hr/>
### Make Route looks like MVC:

```powershell



    Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
   


});

```
### We need to create make conrtoller Dashboard:

```powershell
php artisan make:controllerDashboard

```
### Use dashboard class in web:
### Make function:
```powershell
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}


```
### Now Make a view dashboard.blade.php:

```powershell
 @extends('master')

 @section('title')
     Dashboard Page
 @endsection


 @section('body')
     <section class="py-5">
         <div class="container">
             <div class="row">
                 <div class="col">
                     <div class="card card-body">
                         <h1>This is Dashboard .. </h1>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endsection


```
###  Make drop Down menu in master.php:
```powershell
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">My APP</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
          
            <li><a href="{{route('full-name')}}" class="nav-link">Full Name</a></li>
            <li><a href="{{route('calculator')}}" class="nav-link">Calculator</a></li>
            <li><a href="{{route('password-generator')}}" class="nav-link">Password Generator</a></li>
            <li><a href="{{route('string-word-count')}}" class="nav-link">String word Count</a></li>
            <li><a href="{{route('add-product')}}" class="nav-link">Add Product</a></li>
            <li><a href="{{route('manage-product')}}" class="nav-link">Manage Product</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a></li>
                    <li><a href="" class="dropdown-item"> Logout </a></li>        
                <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
           
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>


```

### Now make Perfect log in logout rules in master.blade.php:

```powershell
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">My APP</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            @if(isset(Auth::user()->id))
            <li><a href="{{route('full-name')}}" class="nav-link">Full Name</a></li>
            <li><a href="{{route('calculator')}}" class="nav-link">Calculator</a></li>
            <li><a href="{{route('password-generator')}}" class="nav-link">Password Generator</a></li>
            <li><a href="{{route('string-word-count')}}" class="nav-link">String word Count</a></li>
            <li><a href="{{route('add-product')}}" class="nav-link">Add Product</a></li>
            <li><a href="{{route('manage-product')}}" class="nav-link">Manage Product</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a></li>
                    <li><a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"> Logout </a></li>
                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                        @csrf
                    </form>
                </ul>
            </li>
            @else
                <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
            @endif
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>


```

### Now make the route for sucurity:

```powershell

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');


Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/full-name', [HomeController::class, 'fullName'])->name('full-name');
    Route::post('/full-name', [HomeController::class, 'makeFullName'])->name('full-name');
    Route::get('/calculator', [HomeController::class, 'calculator'])->name('calculator');
    Route::get('/password-generator', [HomeController::class, 'passwordGenerator'])->name('password-generator');
    Route::post('/password-generator', [HomeController::class, 'newPassword'])->name('password-generator');
    Route::get('/string-word-count', [HomeController::class, 'stringWordCount'])->name('string-word-count');
    Route::post('/string-word-count', [HomeController::class, 'wordCharacterCount'])->name('string-word-count');
    Route::get('/add-product', [ProductController::class, 'index'])->name('add-product');
    Route::post('/new-product', [ProductController::class, 'create'])->name('new-product');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('manage-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('update-product');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');


});

```

### This is the main login page:
![image](https://github.com/fmahadyBD/PHP_With-Laravel-Framework/assets/109776849/9dce650a-99f2-4d0c-9b43-1bcd0ccc466d)

### this is the Final lage of login:`it will be ein auth
```powershell

@extends('master')

@section('title')
Login Page
@endsection

@section('body')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">Login Page</div>
                        <div class="card-body">
                            <form method="post" action="{{route('login')}}">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" required/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" required/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-danger" value="Login"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

```


```powershell


```
```powershell


```
```powershell


```

