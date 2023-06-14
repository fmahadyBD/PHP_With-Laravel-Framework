### in the manage.blade:

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
### Rout:

```powershell

  Route::get('/manage-product', [ProductController::class, 'manage'])->name('manage-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('update-product');
    
```
    
  ### Goto the ProductController class of function edit:
  ```powershell
   private $products, $product;
   public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit', ['product' => $this->product]);
    }
```
### Now go to Produl model class:

```powershell

    private static $product, $image, $imageName, $directory, $imageUrl;

    public static function imageUpload($request)
    {
        self::$image      = $request->file('product_image');
        self::$imageName  = self::$image->getClientOriginalName();
        self::$directory  = "img/upload/";
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName; // img/upload/fising-coupe.jpeg
    }


    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if ($request->file('product_image'))
        {
            if (file_exists(self::$product->product_image))
            {
                unlink(self::$product->product_image);
            }
            self::$imageUrl = self::imageUpload($request);
        }
        else
        {
            self::$imageUrl = self::$product->product_image;
        }
        self::$product->product_name        = $request->product_name;
        self::$product->product_category    = $request->product_category;
        self::$product->product_brand       = $request->product_brand;
        self::$product->product_price       = $request->product_price;
        self::$product->product_image       = self::$imageUrl;
        self::$product->product_description = $request->product_description;
        self::$product->save();
    }

```
### Make the editing blade file:

```powershell

@extends('master')

@section('title')
    Edit Product Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-success">Edit Product Form</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <form action="{{route('update-product', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_name}}" class="form-control" name="product_name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Category</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_category}}" class="form-control" name="product_category"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Brand</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_brand}}" class="form-control" name="product_brand"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" value="{{$product->product_price}}" class="form-control" name="product_price"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="product_image"/>
                                    <img src="{{asset($product->product_image)}}" alt="" height="100" width="120"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="product_description">{{$product->product_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update Product Info"/>
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




