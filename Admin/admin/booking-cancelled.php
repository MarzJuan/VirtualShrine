<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
<h4 class="mt-4">Cancelled Booking</h4>
    <ol class="breadcrumb mb-4">
        <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Cancelled Booking</li>  
    </ol>

    <div class="row">
        <h1></h1>
        <h1></h1>
        <h1></h1>
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>List of Cancelled Booking</h4>
                </div>
                <div class="card-body">

                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>First Name</center></th>
                            <th><center>Last Name</center></th>
                            <th><center>Date of Visit</center></th>
                            <th><center>No. of Visitors</center></th>
                            <th><center>Status</center></th>
                            <!-- <th><center>Action</center></th> -->
                            <th></th>
                            
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM bookings WHERE status='4'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $bookings)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $bookings['bookingID']; ?></td>
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
                                                    echo '<span style="color:GREEN;text-align:center;">Approved</span>';
                                                }
                                                if($bookings['status'] ==2)
                                                {
                                                    echo '<span style="color:RED;text-align:center;">Rejected</span>';
                                                }
                                                if($bookings['status'] ==3)
                                                {
                                                    echo '<span style="color:VIOLET;text-align:center;">Reschedule</span>';
                                                }
                                                if($bookings['status'] ==4)
                                                {
                                                    echo '<span style="color:BLUE;text-align:center;">Cancelled</span>';
                                                }


                                            ?>
                                            
                                        <!-- <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="approve_booking" value="<?=$bookings['booking_id'];?>" class="btn btn-success">Approve</button>
                                            
                                                <button type="submit" name="reject_booking" value="<?=$bookings['booking_id'];?>" class="btn btn-danger">Reject</button>
                                            </form>
                                        </td> -->


                                        <td>
                                            <a href="booking-details-cancelled.php?booking_id=<?=$bookings['booking_id'];?>">View Details</a>
                                        </td>
                                
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
</main>

<?php
include('includes/footer.php');
include('includes/script.php');
?>