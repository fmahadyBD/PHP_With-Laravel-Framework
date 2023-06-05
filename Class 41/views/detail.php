<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <h3 class=""><?php echo $news['title']; ?></h3>
            <div class="col-md-6">
                <div class="card">
                    <img src="assets/img/<?php echo $news['image']; ?>" alt=""/>
                    <div class="card-img-overlay"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">

                    <p><?php echo $news['sort-des']; ?></p>
                    <p><?php echo $news['des']; ?></p>

                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
