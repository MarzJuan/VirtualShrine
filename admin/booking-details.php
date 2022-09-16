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
                            $query = "SELECT * FROM bookings";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    
                                    ?>

<div class="row">
  <div class="column">
  <b>Booking sample:</b>
  </div>
  <div class="column"></div>
</div>

                                <div class="content">
                                    <div class="left-column">
		                                <div class="right-column-content">
                                            <div class="left-row">
            
                                            <b>Booking ID:</b>

                                            </div>
                                        </div>
                                    </div>
                                <div class="right-column">
                                    <div class="right-column-content">
                                        <div class="left-row">
                    
                                        <?= $row['booking_id']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                                    
                                    <b>Booking ID:</b>&emsp;&emsp;&emsp;&emsp;<?= $row['booking_id']; ?><br>
                                    <b>Name:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<td><?= $row['fname'],' ', $row['lname'] ?></td><br>
                                    <b>Phone Number:</b>&emsp;&ensp;&ensp;<?= $row['phone_no']; ?><br>
                                    <b>Email:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<?= $row['email']; ?><br>
                                    <b>Attached File:</b>&emsp;&emsp;&emsp;&nbsp;<?= $row['id_image']; ?><br>
                                    <b>Organization:</b>&emsp;&emsp;&emsp;<?= $row['org_name']; ?><br>
                                    <b>Date of Visit:</b>&emsp;&emsp;&emsp;&nbsp;<?= $row['date_visit']; ?><br>
                                    <b>Time of Visit:</b><?= $row['time_visit']; ?><br>
                                    <b>Number of Visitors:</b><?= $row['no_visitors']; ?><br>

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
                            ?>
                            
                       

                
    
</form>

                </div>
            </div>
        </div>

    </div>

<?php
include('includes/footer.php');
include('includes/script.php');
?>