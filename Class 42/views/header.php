<?php
//session_start();
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="assets/img/product/fd28154da72a0b661efa7a2561257faf.webp" height="70" width="70" alt=""/></a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                <ul class="dropdown-menu">
                    <?php foreach ($categories as $category) { ?>
                    <li><a href="action.php?page=category&id=<?php echo $category['id']; ?>" class="dropdown-item"><?php echo $category['name']; ?></a></li>
                    <?php } ?>
                </ul>
            </li>

            <li><a href="action.php?page=login" class="nav-link">Login</a></li>


            <li><a href="action.php?page=logout" class="nav-link">Logout</a></li>


            <li><a href="action.php?page=full_name" class="nav-link">Full Name</a></li>
            <li><a href="action.php?page=calculator" class="nav-link">Calculator</a></li>

            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Series</a>
                <ul class="dropdown-menu">
                    <li><a href="action.php?page=series_one" class="dropdown-item">Series One</a></li>
                    <li><a href="action.php?page=series_two" class="dropdown-item">Series Two</a></li>
                    <li><a href="action.php?page=series_three" class="dropdown-item">Series Three</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
