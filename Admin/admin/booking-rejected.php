<?php
include('authentication.php');
include('includes/header.php');
?>

<?php include('message.php'); ?>
<main id="main" class="main">
<h4 class="mt-4">Rejected Booking</h4>
    <ol class="breadcrumb mb-4">
        <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Rejected Booking</li>  
    </ol>

    <div class="row">
        <h1></h1>
        <h1></h1>
        <h1></h1>
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                
                    <h4>List of Rejected Bookings</h4>
                </div>
                <div class="card-body">

                <table id="myDataTable" class="table table-bordered table-hover">
                    
                    <thead>
                        <tr>
                            
                            <th><center>ID</center></th>
                            <th><center>Name</center></th>
                            <th><center>Date of Visit</center></th>
                            <th><center>No. of Visitors</center></th>
                            <th><center>Status</center></th>
                            <th></th>
                            
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM bookings WHERE status='2'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $bookings)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $bookings['bookingID']; ?></td>
                                        <td><?= $bookings['fname'].' '.$bookings['lname']; ?></td>
                                        <td><?= $bookings['date_visit']; ?></td>
                                        <td><?= $bookings['no_visitors']; ?></td>
                                        <td>
                                            <?php

                                                if($bookings['status'] ==0)
                                                {
                                                    echo '<span style="color:Yellow;text-align:center;">Pending</span>';
                                                }
                                                if($bookings['status'] ==1)
                                                {
                                                    echo '<span style="color:GREEN;text-align:center;">Approved</span>';
                                                }
                                                if($bookings['status'] ==2)
                                                {
                                                    echo '<span style="color:RED;text-align:center;">Rejected</span>';
                                                }


                                            ?>


                                        <td>
                                        <a name="booking_id" href="booking-details-reject.php?booking_id=<?=$bookings['booking_id'];?>">View Details</a>
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

<?php
include('includes/footer.php');
include('includes/script.php');
?>