<?php
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
    <title>Cancel or Reschedule Booking - VirtualShrine</title>
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EX6J146FEC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EX6J146FEC');
</script>

<link rel="icon" type="image/png" href="assets/img/crs-logo.png">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js?v0.1"></script>
      <link rel="stylesheet" href="assets/css/style.css?v1">
      <script src="assets/js/jquery.min.js"></script>

      <link href="assets/css/jquery-ui.css" rel="stylesheet">
      <script src = "assets/js/jquery-ui.js"></script> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
<div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 pb-2">
          <div class="text-right"><a href="homePage.php">Home</a></div>
        </div>        
        <div class="col-md-8 offset-md-2 card pt-4 pb-4 pl-4 pr-4 form-heading">
          <img src="assets/img/crs-logo.png" class="nmp-logo m-auto">
          <h3 class="mt-2 mb-0">MUSEO NG KASAYSAYANG PAMPULITIKA NG PILIPINAS</h3>
          <!--<div class="mt-3">Online Reservation Form</div>
        </div>-->
      </div>      
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Reservation Information</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                        <p style="margin-left:115px;">Enter Booking ID:</p>
                            <div style="margin-left:100px;" class="row">
                                <div class="col-md-8">
                                    <input type="text" name="booking_id" value="<?php if(isset($_GET['booking_id'])){echo $_GET['bookingID'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php

                                    if(isset($_GET['booking_id']))
                                    {
                                        $booking_id = $_GET['booking_id'];

                                        $query = "SELECT * FROM bookings WHERE status='1' AND booking_id='$booking_id' LIMIT 1";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            $row = mysqli_fetch_array($query_run);
                                        ?>

                                                <div style="margin-left:50px;" class="form-group mb-3">
                                                    <label for=""><b>Name:</b></label><a style="margin-left:90px;">
                                                    <?php echo $row['fname'].' '.$row['lname']; ?></a>
                                                </div>
                                                <div style="margin-left:50px;" class="form-group mb-3">
                                                    <label for=""><b>Date of Visit:</b></label><a style="margin-left:47px;">
                                                    <?php echo $row['date_visit']; ?></a>
                                                </div>
                                                <div style="margin-left:50px;" class="form-group mb-3">
                                                    <label for=""><b>No. of Visitors:</b></label><a style="margin-left:35px;">
                                                    <?php echo $row['no_visitors']; ?></a>
                                                </div><br>
                                                <hr>

                                                <p style="margin-left:50px;">Want to make changes? <a value="<?$row['booking_id']?>" href="booking_reschedule.php?booking_id=<?= $row['booking_id']?>">Reschedule</a> or <a href="#" data-toggle="modal" data-target="#cancelBooking<?php $row['booking_id']?>">Cancel Booking</a></p>
                                                <?php
                                            }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                    
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="cancelBooking<?php $row['booking_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

        <form action="booking-code.php" method="POST">
        <input type="hidden" name="booking_id" value="<?= $row['booking_id'] ?>">
          <div class="modal-body" id="loading-msg">    
            Are you sure you wish to cancel this booking?       
          </div>
          <div class="modal-footer">
            <button type="submit" name="cancelBook" class="btn btn-primary">Yes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js?v1"></script>
    <script src="assets/js/parsely.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>