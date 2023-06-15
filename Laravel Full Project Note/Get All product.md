### In the HomeControler:`Product::all();`
```powershell
class HomeController extends Controller
{
    private $product, $products = [], $singleProduct, $fullName, $data = [], $index, $result;

    public function index()
    {
        $this->products = Product::all();
        return view('home', ['products' => $this->products]);
    }
```
### Goto the home.blade.pho where we want to show every data from table:`$product->product_image)`
```powershell
@extends('master')

@section('title')
    Home Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset($product->product_image)}}" alt="" height="280"/>
                        <div class="card-body">
                            <h4>{{$product->product_name}}</h4>
                            <p>TK. {{$product->product_price}}</p>
                            <hr/>
                            <a href="{{route('detail',['id' => $product->id])}}" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
