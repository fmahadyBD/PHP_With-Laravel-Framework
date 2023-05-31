<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="assets/img/product/<?php echo $product['image']; ?>" height="250" alt=""/>
                    <div class="card-body">
                        <h4><?php echo $product['name']; ?></h4>
                        <p class="fw-bold"><?php echo $product['price']; ?></p>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <hr/>
                        <a href="action.php?page=detail&id=<?php echo $product['id'];?>" class="btn btn-success">Detail</a>
                    </div>
                </div>
            </div>
    <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>