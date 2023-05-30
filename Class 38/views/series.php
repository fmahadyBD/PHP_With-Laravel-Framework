<?php include "header.php"?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1>series</h1>
                    <hr/>
                    <from action="action.php" method="post">
                        <div class="row mb-3">
                            <label class="col-md-3">Start Number</label>
                            <div class="col-md-9">
                                <input type="number" name="start_number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">End Number</label>
                            <div class="col-md-9">
                                <input type="number" name="end_number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Result</label>
                            <div class="col-md-9">
                                <textarea name="result"  value="<?php echo isset($_GET['res'])? $_GET['res']: '' ?>" name=""/> </textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="seSub" value="Submit">
                            </div>
                        </div>
                    </from>
                </div>
            </div>

        </div>
    </div>

</section>

<?php include "footer.php"?>
