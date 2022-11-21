<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
<h4 class="mt-4">Pending Booking</h4>
    <ol class="breadcrumb mb-4">
        <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Pending Booking</li>  
    </ol>

    <div class="row">
        <h1></h1>
        <h1></h1>
        <h1></h1>
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>List of Pending Bookings</h4>
                </div>
                <div class="card-body">

                <table id="myDataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>First Name</center></th>
                            <th><center>Last Name</center></th>
                            <th><center>Date of Visit</center></th>
                            <th><center>No. of Visitors</center></th>
                            <th><center>Status</center></th>
                            <th><center>Action</center></th>
                            <th></th>
                            
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM bookings WHERE status='0' OR status='3' ";
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
                                                    echo '<span style="color:#FFC000;text-align:center;">Pending</span>';
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
                                            
                                        <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="approve_booking" value="<?=$bookings['booking_id'];?>" class="btn btn-success">Approve</button>
                                                <button type="button" data-toggle="modal" data-target="#rejectBooking" class="btn btn-danger">Reject</button>
                                            </form>
                                        </td>


                                        <td>
                                            <a name="booking_id" href="booking-details.php?booking_id=<?=$bookings['booking_id'];?>">View Details</a>
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

    <!-- Modal -->
 <div class="modal fade"
        id="rejectBooking"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
         
        <div class="modal-dialog" role="document">
            <div class="modal-content">
             
                <!-- Add image inside the body of modal -->
                <div class="modal-body">

                <div>
                    <p>Why do you want to reject this Booking?</p>
                    <hr>
                    <input type="checkbox" id="reject1" name="reject1" value="dob_unavailable">
                    <label for="reject1"> The scheduled date is not available</label><br>
                    <input type="checkbox" id="reject2" name="reject2" value="invalid_id">
                    <label for="reject2"> Booking from a guest with no verified government ID</label><br>
                    <input type="checkbox" id="reject3" name="reject3" value="duplicate">
                    <label for="reject3"> Duplicate booking request</label><br>
                    <label for="reject4"> Other:</label><br>
                    <input type="textbox" id="reject4" name="reject4" value="" placeholder="Type here">
                    
                </div>
                    
                </div>
 
                <div class="modal-footer">
                <form action="code.php" method="POST">
                    <button type="submit" name="reject_booking" value="<?=$bookings['booking_id'];?>" class="btn btn-danger">Reject</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../Website/assets/js/main.js?v1"></script>
    <script src="../../Website/assets/js/parsely.min.js"></script>
    <script src="../../Website/assets/js/popper.min.js"></script>
    <script src="../../Website/assets/js/bootstrap.min.js"></script>

<?php
include('includes/footer.php');
include('includes/script.php');
?>