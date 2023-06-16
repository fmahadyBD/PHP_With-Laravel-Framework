
### 1
```powershell



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Product</h1>
                <hr class="py-3 bg-info-subtle"/>
                <form action="{{route('updatesss')}}" method="POST"   enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-md-3">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name_form">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image_form">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-secondary float-end">Add Student</input>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


```

### 2
```powershell
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;

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

Route::get('/',[HomeControler::class,'add'])->name('add');

Route::post('/ffdfdfdfd',[HomeControler::class,'update'])->name('updatesss');

```

### 3
```powershell
<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function add(){
        return view('add');
    }
    public function update(Request $request){
        Student::addnew($request);
        return back();
    }
}

```

### 4
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
        self::$image    =$requuest->file('image_form');
        self::$imageName    =self::$image->getClientOriginalName();
        self::$directory    ="image/upload";
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function addnew($request){
//        dd($request->all());
        self::$imageUrl=self::imageUpload($request);
        self::$student=new Student();
        self::$student->name        =$request->name_form;
        self::$student->image       =self::$imageUrl;
        self::$student->save();

}
}

```

### 5
```powershell

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};


```

### 
```powershell

```

### 
```powershell

```

