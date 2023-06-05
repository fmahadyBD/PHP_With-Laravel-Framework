<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
$home=new Home();
if(isset($_GET['page'])){
    if($_GET['page']=='news'){
        $home->newses($_GET['id']);

    } elseif ($_GET['page'] == 'detail')
    {
        $home->newsByID($_GET['id']);
    }
    elseif ($_GET['page'] == 'home')
    {
        $home->index();
    }
    elseif ($_GET['page'] == 'catagoris')
    {
        $home->categoryNews($_GET['id']);
    }
}