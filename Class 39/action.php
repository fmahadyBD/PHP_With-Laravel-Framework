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
    elseif ($_GET['page'] == 'series_one')
    {
        $home->seriesOne();
    }
    elseif ($_GET['page'] == 'series_two')
    {
        $home->seriesTwo();
    }
    elseif ($_GET['page'] == 'series_three')
    {
        $home->seriesThree();
    }
}

elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName();
    $fullName->makeFullName($_POST);

}
elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $calculator-> myCalculator();

}
elseif (isset($_POST['series_one_btn']))
{
    $series = new Series($_POST);
    $series->seriesOne();
}