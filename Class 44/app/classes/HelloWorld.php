<?php
namespace app\classes;
use App\classes\User;
use App\classes\Student;
use App\classes\Teacher;


class HelloWorld extends Student implements ExampleOne,ExampleTwo
{
    use Teacher;
public  $message;
private $x;
protected $y;
public $z,$i;
public $user;
public static $country='Bangladesh';
public $data=[];
public function __construct()
{

    $this->message="Mahady Hasan Fahim <br>";
    $this->x=10;
    $this->y=20;
    $this->z=30;
    $this->a=199;


}
private function index(){

    echo 'Hello index';
    echo 'Hello index';


}
public static function hai(){
    echo 'hello hai';
}
public  function create(){

    echo 'in create';
    echo $this->m;





    echo self::$country;




}
protected function manage(){
    return 'in manage';
}

    public function one()
    {
        // TODO: Implement one() method.
    }

    public function two()
    {
        // TODO: Implement two() method.
    }

    public function three()
    {
        // TODO: Implement three() method.
    }

    public function talk()
    {
        // TODO: Implement talk() method.
    }

    public function run()
    {

    }

    public function eat()
    {
        // TODO: Implement eat() method.
    }

    public function demo()
    {

    }
}
