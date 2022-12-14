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

                <?php
                    if(isset($_GET['booking_id']))
                    {
                        $booking_id = $_GET['booking_id'];
                        $booking_query = "SELECT * FROM bookings WHERE booking_id='$booking_id' LIMIT 1";
                        $booking_query_res = mysqli_query($con, $booking_query);

                        if(mysqli_num_rows($booking_query_res) > 0)
                        {
                            $booking_row = mysqli_fetch_array($booking_query_res);
                            ?>


                <form action="code.php" method="POST" enctype='multipart/form-data'>

                    <div class="row">
                        <br>

                            <div class="form-group mb-3">
                                <label for=""><b>Booking ID:</b></label><a style="margin-left:57px;">
                                    <?php echo $booking_row['bookingID']; ?></a>
                            </div>

                            <div class="form-group mb-3">
                                <label for=""><b>Name:</b></label><a style="margin-left:95px;">
                                    <?php echo $booking_row['fname'].' '.$booking_row['lname']; ?></a>
                            </div>

                            <div class="form-group mb-3">
                                <label for=""><b>Email:</b></label><a style="margin-left:99px;">
                                    <?php echo $booking_row['email']; ?></a>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Why do you want to reject this booking?</label>
                                <textarea type="text" name="reason" required class="form-control"></textarea>
                            </div>

                            <br>
                            <div class="com-md-6 mb-3">
                                <form action="code.php" method="POST">
                                <button type="submit" name="reject_booking" value="<?=$booking_row['booking_id'];?>" id="rejectBooking<?php $booking_row['booking_id'];?>" class="btn btn-danger">Reject</button>
                                </form>
                            </div>
                            <?php
                        }
                    }
                    ?>


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