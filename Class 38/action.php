<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Series;

$home = new Home();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'category')
    {
        $home->categoryProduct($_GET['id']);
    }
    elseif ($_GET['page'] == 'home')
    {
        $home->index();
    }
    elseif ($_GET['page'] == 'detail')
    {
        $home->productDetail($_GET['id']);
    }
    elseif ($_GET['page'] == 'full_name')
    {
        $home->fullName();
    }
    elseif ($_GET['page'] == 'calculator')
    {
        $home->calculator();
    }
    elseif ($_GET['page'] == 'series')
    {
        $home->series();
    }
}

elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName();
    $fullName->makeFullName($_POST);

}
elseif (isset($_POST['calBtn']))
{
    $cal = new Calculator($_POST);
    $cal->myCalu();

}
elseif (isset($_POST['seSub']))
{
    $cal = new Series($_POST);
    $cal->seriesFun();

}

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';