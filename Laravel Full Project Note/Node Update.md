## create the manage.blade: This is the manage where havea Table there we see the all of the data:
```powershell

@extends('master')

@section('title')
    Manage Product Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h1 class="text-center text-success">All Product Info</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_category}}</td>
                                <td>{{$product->product_brand}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>
                                    <img src="{{asset($product->product_image)}}" alt="" height="60" width="80"/>
                                </td>
                                <td>{{$product->product_description}}</td>
                                <td>
                                    <a href="{{route('edit-product',['id' => $product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="{{route('delete-product', ['id' => $product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this');">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
```

## Make Rout:
```powershell

    Route::get('/manage-product', [ProductController::class, 'manage'])->name('manage-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('update-product');
```

### now the manage function is:

```powershell

    public function manage()
    {
        $this->products = Product::all();
        return view('product.manage', ['products' => $this->products]);
    }
 ```





