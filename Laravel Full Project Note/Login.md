### Go to the web:
```powershell
https://jetstream.laravel.com/3.x/introduction.html

```
### The install:
```powershell composer require laravel/jetstream
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
```powershell


```
```powershell


```
```powershell


```
```powershell


```
```powershell


```
```powershell


```
```powershell


```
```powershell


```

