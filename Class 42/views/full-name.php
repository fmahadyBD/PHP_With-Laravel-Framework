<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1 class="text-center">Full Name Program <?php echo $_SESSION['name'];?></h1>
                    <hr/>
                    <form action="action.php" method="post">
                        <div class="row mb-3">
                            <label class="col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="first_name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="last_name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Full Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo isset($_GET['message']) ? $_GET['message'] : '' ?>" name=""/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="full_name_btn" value="Submit"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>

