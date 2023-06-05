
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prothomalo</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
</head>
<body>

<header>
    <section class=" text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-8">
                   <a href="action.php?page=home"> <img src="assets/img/p.jpg"height="150"></a>

                </div>
                <div class="col-md-1 py-2">
                    <input type="submit" name="login" class="btn btn-success" value="login"/>

                </div>
            </div>

        </div>

    </section>

<hr/>
</header>
<nav class="navbar navbar-expand-md ">

    <div class="container">
        <ul class="navbar-nav ">
<!--            --><?php //foreach ($categories as $category) { ?>
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">--><?php //echo $category['name']; ?><!--</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">বিশেষ সংবাদ</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">রাজনীতি</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">অপরাধ</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">বাংলাদেশ</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">বিশ্ব</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">বাণিজ্য</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">মতামত</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">খেলা</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">বিনোদন</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">চাকরি</a></li>-->
<!--            <li><a href="action.php?page=catagoris&id=--><?php //echo $category['id']; ?><!--"" class="nav-link">জীবনযাপন</a></li>-->
<!--            --><?php //} ?>
            <?php foreach ((array)$categories as $category) { ?>
                <li><a href="action.php?page=catagoris&id=<?php echo $category['id']; ?>" class="nav-link"><?php echo $category['name']; ?></a></li>
            <?php } ?>
        </ul>
    </div>



</nav>