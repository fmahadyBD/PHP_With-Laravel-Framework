
<?php include 'header.php';?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog) {?>
                <div class="col-md-4 mb-4">
                    <div class="card rounded-0">
                        <img src="assets/img/<?php echo $blog ['image'];?>" alt=" "class="card-img-top rounded-0" height="200"/>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $blog['title']; ?></h4>
                            <p><?php echo $blog['description_one'];?></p>
                            <hr/>
                            <a href="action.php?page=detail&&id=<?php echo $blog['id'];?>" class="btn btn-success rounded-0">Read more</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </section>


<?php include 'footer.php'; ?>
