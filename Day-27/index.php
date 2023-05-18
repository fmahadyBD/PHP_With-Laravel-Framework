<?php

require_once "vendor/autoload.php";
use App\classes\Home;



$students = new Home();
$students->index();
