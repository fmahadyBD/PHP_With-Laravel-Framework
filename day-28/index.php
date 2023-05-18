<?php
require_once 'vendor/autoload.php';
use App\classes\Home;

//composer update
$home=new Home();
$home->index();