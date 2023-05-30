<?php include "header.php";?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1> My calculator</h1>
                    <hr/>
                    <form action="action.php" method="post">
                        <div class="row mb-3">
                            <label class="col-md-3">First Number</label>
                            <div class="col-md-9">
                            <input type="number" name="first_number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Second Number</label>
                            <div class="col-md-9">
                                <input type="number" name="second_number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Your choice</label>
                            <div class="col-md-9">
                                <label><input type="radio" class="m-lg-3" name="choice"checked value="+"/>+</label>
                                <label><input type="radio" class="m-lg-3" name="choice" value="-"/>-</label>
                                <label><input type="radio" class="m-lg-3" name="choice" value="*"/>*</label>
                                <label><input type="radio" class="m-lg-3" name="choice" value="/"/>/</label>
                                <label><input type="radio" class="m-lg-3" name="choice" value="%"/>%</label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Result</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo isset($_GET['result'])? $_GET['result']: '' ?>" name=""/>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="calBtn" value="Submit">
                                <input type="reset" class="btn btn-success" value="Reset">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php';?>
