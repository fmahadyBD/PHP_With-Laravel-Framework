<?php include "header.php";?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($news as $newes) { ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="assets/img/<?php echo $newes['image']; ?>" height="250" alt=""/>
                    <div class="card-body">
                        <h4><?php echo $newes['title']; ?></h4>
                        <p class="fw-bold"></p>
                        <p class="card-text"></p>
                        <hr/>
                        <a href="action.php?page=detail&id=<?php echo $newes['id'];?>" class="btn btn-success">Read</a>
                    </div>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</section>


<?php include "footer.php";?>
