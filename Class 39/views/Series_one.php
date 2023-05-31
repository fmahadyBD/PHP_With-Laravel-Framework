<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1>Series One Problem</h1>
                    <hr/>
                    <form action="action.php" method="post">
                        <div class="row mb-3">
                            <label class="col-md-3">Starting Number</label>
                        <div class="col-md-9">
                            <input type="number" name="starting_number" class="form-control"/>
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Ending Number</label>
                            <div class="col-md-9">
                                <input type="number" name="ending_number" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Result</label>
                            <div class="col-md-9">
                                <textarea class="form-control" ><?php echo isset($_GET['result'])? $_GET['result']: ''?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="series_one_btn" class="btn btn-success" value="Submit"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
