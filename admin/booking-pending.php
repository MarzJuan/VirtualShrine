<?php
session_start();
include('config/dbcon.php');
include('includes/header.php');
?>

<h1></h1>
<div class="container-fluid px-4">

    <div class="row">

        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Pending Booking</h4>
                </div>
                <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of Visit</th>
                            <th>No. of Visitors</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM bookings";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $bookings)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $bookings['booking_id']; ?></td>
                                        <td><?= $bookings['fname']; ?></td>
                                        <td><?= $bookings['lname']; ?></td>
                                        <td><?= $bookings['date_visit']; ?></td>
                                        <td><?= $bookings['no_visitors']; ?></td>
                                        <td>
                                            <?php

                                                if($bookings['status'] ==0)
                                                {
                                                    echo "Pending";
                                                }
                                                if($bookings['status'] ==1)
                                                {
                                                    echo "Accepted";
                                                }
                                                if($bookings['status'] ==2)
                                                {
                                                    echo "Rejected";
                                                }


                                            ?>
                                            
                                        <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="approve_booking" class="btn btn-success">Approve</button>
                                            
                                                <button type="submit" name="reject_booking" class="btn btn-danger">Reject</button>
                                            </form>
                                        </td>


                                        
                                        <td><a href="booking-details.php">View Details</a></td>
                                
                                    </tr>
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
                            ?>
                            
                        </tbody>
                </table>


                </div>
            </div>
        </div>

    </div>

<?php
include('includes/footer.php');
include('includes/script.php');
?>