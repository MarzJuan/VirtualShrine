<?php
session_start();
include('config/dbcon.php');
include('includes/header.php');


?>

<div class="container-fluid px-4">
    <h4 class="mt-4"></h4>

    <div class="row mt-4">
        <div class="col-md-12">

        <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Booking Details
                        <a href="booking-pending.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                
                <?php
                    if(isset($_GET['booking_id']))
                    {
                        $booking_id = $_GET['booking_id'];
                        $bookings = "SELECT * FROM bookings WHERE booking_id='$booking_id'";
                        $booking_run = mysqli_query($con, $bookings);

                        if(mysqli_num_rows($booking_run) > 0)
                        {
                            foreach($booking_run as $bookings)
                            {
                            ?>   
                                    <b>Booking ID:</b>&emsp;&emsp;&emsp;&emsp;<?= $bookings['booking_id']; ?><br>
                                    <b>Name:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<td><?= $bookings['fname'],' ', $bookings['lname'] ?></td><br>
                                    <b>Phone Number:</b>&emsp;&ensp;&ensp;<?= $bookings['phone_no']; ?><br>
                                    <b>Email:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<?= $bookings['email']; ?><br>
                                    <b>Attached File:</b>&emsp;&emsp;&emsp;&nbsp;<?= $bookings['id_image']; ?><br>
                                    <b>Organization:</b>&emsp;&emsp;&emsp;<?= $bookings['org_name']; ?><br>
                                    <b>Date of Visit:</b>&emsp;&emsp;&emsp;&nbsp;<?= $bookings['date_visit']; ?><br>
                                    <b>Time of Visit:</b><?= $bookings['time_visit']; ?><br>
                                    <b>Number of Visitors:</b><?= $bookings['no_visitors']; ?><br>

                                    <br><br>
                                    <td><a href= "booking-approve.php" class="btn btn-success">Approve</a>
                                        <a href= "booking-reject.php" class="btn btn-danger">Reject</a></td>

                            <?php
                            }
                        }
                            else
                            {
                            ?>
                                <tr>
                                    <td colspan = "6">No Record Found</td>
                                </tr>
                            <?php
                            }
                    }
                            ?>
                    
                       

                
    

<?php
include('includes/footer.php');
include('includes/script.php');
?>
