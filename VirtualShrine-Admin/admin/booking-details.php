<?php
include('authentication.php');
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
                        $booking_id = $_GET['booking_id'];
                        $bookings = "SELECT booking_id, fname, lname, phone_no, email, id_image, org_name, date_visit, time_visit, no_visitors, status FROM bookings WHERE booking_id='$booking_id'";
                        $booking_run = mysqli_query($con, $bookings);

                        if(mysqli_num_rows($booking_run) > 0)
                        {
                            while($bookings = $booking_run->fetch_assoc()) 
                        {
                            {
                                echo "<br><b>Booking ID:</b> " .'<span style="margin-right: 5.9em;"></span>'. $bookings["booking_id"]."<br>";
                                echo "<b>Name:</b> " .'<span style="margin-right: 8.4em;"></span>'. $bookings["fname"]. " " . $bookings["lname"] ."<br>";
                                echo "<b>Phone Number:</b> " .'<span style="margin-right: 4em;"></span>'. $bookings["phone_no"]."<br>";
                                echo "<b>Email:</b> " .'<span style="margin-right: 8.6em;width="60px" height="60px"></span>'. $bookings["email"]."<br>";
                                echo "<b>Attached File:</b> " .'<span style="margin-right: 8.6em;"></span>'.'<img src="Website/Images/visitor_attachment/<?=$bookings["id_image"]?>'."<br>";
                                echo "<b>Name of Organization:</b> " .'<span style="margin-right: 0.70em;"></span>'. $bookings["org_name"]."<br>";
                                echo "<b>Date of Visit</b> " .'<span style="margin-right: 5.6em;"></span>'. $bookings["date_visit"]."<br>";
                                echo "<b>Time of Visit</b> " .'<span style="margin-right: 5.5em;"></span>'. $bookings["time_visit"]."<br>";
                                echo "<b>Number of Visitors</b> " .'<span style="margin-right: 2.5em;"></span>'. $bookings["no_visitors"]."<br>"."<br>";

                                if($bookings['status'] == 0)
                                {
                                    ?>
                                    <form action="code.php" method="POST">
                                        <button type="submit" name="approve_booking" value="<?=$bookings['booking_id'];?>" class="btn btn-success">Approve</button>
                                            
                                        <button type="submit" name="reject_booking" value="<?=$bookings['booking_id'];?>" class="btn btn-danger">Reject</button>
                                    </form>
                                    <?php
                                }
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
                                                    echo '<span style="color:BLUE;text-align:center;">Reschedule</span>';
                                                }
                                                if($bookings['status'] ==4)
                                                {
                                                    echo '<span style="color:RED;text-align:center;">Cancelled</span>';
                                                }
                            }
                        }
                        }
                      else {
                            echo "0 results";
                        }

                    
    ?>

<?php
include('includes/footer.php');
include('includes/script.php');
?>
