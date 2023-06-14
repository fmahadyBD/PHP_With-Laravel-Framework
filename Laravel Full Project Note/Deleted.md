### Manage file
```  powershell

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
### Rout:
```powershell
 Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');
 ```
 
 ### Product controlass classL
 ```powershell
  public function delete($id)
    {
        Product::deleteProduct($id);
        return back()->with('message', 'Product info delete successfully.');
    }
   ```
   ### Goto the Prodduct model class:
    private static $product, $image, $imageName, $directory, $imageUrl;
     public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->product_image))
        {
            unlink(self::$product->product_image);
        }
        self::$product->delete();
    }
    
```


