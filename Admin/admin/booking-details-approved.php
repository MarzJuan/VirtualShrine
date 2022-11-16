<?php
include('authentication.php');
include('includes/header.php');

?>

<main id="main" class="main">
    <h4 class="mt-4"></h4>

    <div class="row mt-4">
        <h1></h1>
        <h1></h1>
        <h1></h1>
        <div class="col-md-12">

        <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Booking Details
                        <a href="booking-approved.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                
                <?php
                
                if(isset($_GET['booking_id']))
                    {
                        $booking_id = $_GET['booking_id'];
                        $bookings = "SELECT * FROM bookings WHERE booking_id='$booking_id' LIMIT 1";
                        $booking_run = mysqli_query($con, $bookings);

                        if(mysqli_num_rows($booking_run) > 0)
                        {
                            $row = mysqli_fetch_array($booking_run);
                        ?>
                            <div style="margin-left:50px;" class="form-group mb-3">
                                <label for=""><b>Booking ID:</b></label><a style="margin-left:57px;">
                                    <?php echo $row['booking_id']; ?></a>
                            </div>

                            <div style="margin-left:50px;" class="form-group mb-3">
                                <label for=""><b>Name:</b></label><a style="margin-left:95px;">
                                    <?php echo $row['fname'].' '.$row['lname']; ?></a>
                            </div>

                            <div style="margin-left:50px;" class="form-group mb-3">
                                <label for=""><b>Phone No:</b></label><a style="margin-left:65px;">
                                    <?php echo $row['phone_no']; ?></a>
                            </div>

                            <div style="margin-left:50px;" class="form-group mb-3">
                                <label for=""><b>Email:</b></label><a style="margin-left:99px;">
                                    <?php echo $row['email']; ?></a>
                            </div>

                            <div style="margin-left:50px;" class="form-group mb-3">
                                <label for=""><b>Attached File:</b></label><a style="margin-left:40px;">
                                <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#exampleModal<?php $row['booking_id']?>">
                                    Show image
                                </a>
                            </div>
                            <div style="margin-left:50px;" class="form-group mb-3">
                                <label for=""><b>Date of Visit:</b></label><a style="margin-left:47.5px;">
                                    <?php echo $row['date_visit']; ?></a>
                            </div>
                                                
                            <div style="margin-left:50px;" class="form-group mb-3">
                                <label for=""><b>No. of Visitors:</b></label><a style="margin-left:34px;">
                                    <?php echo $row['no_visitors']; ?></a>
                            </div><br>

                            <?php

                                if($row['status'] == 0 || $row['status'] == 3)
                                {
                                    ?>
                                    <form action="code.php" method="POST">
                                        <button style="margin-left:50px;" type="submit" name="approve_booking" value="<?=$row['booking_id'];?>" class="btn btn-success">Approve</button>
                                            
                                        <button type="submit" name="reject_booking" value="<?=$row['booking_id'];?>" class="btn btn-danger">Reject</button>
                                    </form>
                                    <?php
                                }
                                                if($row['status'] ==1)
                                                {
                                                    echo '<b style="margin-left:50px;">Status:</b><span style="color:GREEN;text-align:center;margin-left:50px;">Approved</span>';
                                                }
                                                if($row['status'] ==2)
                                                {
                                                    echo '<b style="margin-left:50px;">Status:</b><span style="color:RED;text-align:center;margin-left:50px;">Rejected</span>';
                                                }
                                                if($row['status'] ==4)
                                                {
                                                    echo '<b style="margin-left:50px;">Status:</b><span style="color:RED;text-align:center;margin-left:50px;">Cancelled</span>';
                                                }
                                            }
                                        
                                      else {
                                            echo "0 results";
                                        }
                                    }
                
                                       
                                    ?>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                </main>

 <!-- Modal -->
 <div class="modal fade"
        id="exampleModal<?php $row['booking_id']?>"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
         
        <div class="modal-dialog" role="document">
            <div class="modal-content">
             
                <!-- Add image inside the body of modal -->
                <div class="modal-body">
                    <img id="image" src="../../Website/Images/visitor_attachment/<?php echo $row['id_image'];?>" width='470' height='300'
                        alt="Attached File" />
                </div>
 
                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">
                        Close
                </button>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Adding scripts to use bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous">
    </script>  

<?php
include('includes/footer.php');
include('includes/script.php');
?>
