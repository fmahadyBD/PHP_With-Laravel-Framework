<?php
session_start();
?>

require_once 'vendor/autoload.php';
use App\classes\Home;


$home = new Home();
$home->index();
