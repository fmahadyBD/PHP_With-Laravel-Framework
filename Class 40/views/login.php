<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card ">
                    <div class="card-header text-center">Login From</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">

                            <div class="row mb-3">

                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">

                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">

                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="loginbtn" class="btn btn-success" value="login"/>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
