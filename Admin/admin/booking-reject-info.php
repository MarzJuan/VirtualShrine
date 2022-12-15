<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
    <h4 class="mt-4"></h4>

    <div class="row mt-4">
        <div class="col-md-12">
        <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Reject Booking?
                        <a href="booking-pending.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">


                <form action="code.php" method="POST" enctype='multipart/form-data'>

                    <div class="row">
                            <div class="col-md-6 mb-12">
                                <label for="">Why do you want to reject this booking?</label>
                                <textarea type="text" name="reason" required class="form-control"></textarea>
                            </div>

                            <div class="com-md-6 mb-3">
                                <button type="submit" name="add_category" class="btn btn-primary">Save Gallery</button>
                            </div>


                        </div>
                    </form>




                </div>
            </div>
        </div>

    </div>
</main>


<?php
include('includes/footer.php');
include('includes/script.php');
?>