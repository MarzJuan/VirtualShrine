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

    <script type="text/javascript">
        
        $(function() {           
           $( "#datevisit" ).datepicker({
               dateFormat: 'dd MM yy',
               minDate: +1,
               maxDate: '+90D',
               beforeShowDay : DisableDates
           });    
           $( ".birthdate" ).datepicker({
               changeMonth: true,
               changeYear: true,
               yearRange: '-100:-15',
               minDate: '-100Y',
               dateFormat: 'yy-mm-dd', 
               maxDate: '-15Y'
           });  
           var holidays = ["01\/04\/2021","02\/04\/2021","03\/04\/2021","27\/03\/2021","28\/03\/2021","20\/03\/2021","21\/03\/2021","23\/03\/2021","24\/03\/2021","25\/03\/2021","26\/03\/2021","30\/03\/2021","31\/03\/2021","04\/04\/2021","05\/04\/2021","06\/04\/2021","07\/04\/2021","08\/04\/2021","09\/04\/2021","12\/04\/2021","13\/04\/2021","14\/04\/2021","15\/04\/2021","16\/04\/2021","19\/04\/2021","20\/04\/2021","21\/04\/2021","22\/04\/2021","23\/04\/2021","26\/04\/2021","27\/04\/2021","28\/04\/2021","29\/04\/2021","30\/04\/2021","01\/05\/2021","03\/05\/2021","04\/05\/2021","05\/04\/2021","06\/05\/2021","17\/06\/2021","18\/06\/2021","25\/07\/2021","24\/07\/2021","27\/07\/2021","28\/07\/2021","29\/07\/2021","30\/07\/2021","31\/07\/2021","17\/10\/2021","16\/10\/2021","25\/12\/2021","01\/01\/2022","05\/02\/2022","20\/04\/2022","14\/04\/2022","15\/04\/2022","16\/04\/2022","03\/05\/2022","27\/06\/2022","28\/06\/2022","29\/06\/2022","30\/06\/2022","01\/07\/2022","02\/07\/2022","03\/07\/2022","04\/07\/2022","05\/07\/2022"]
           function DisableDates(date) {

             var string = jQuery.datepicker.formatDate('dd MM yy', date);
             var day = date.getDay();
             return [ ( day !== 1 && holidays.indexOf(string) == -1), "" ];
           }
        });

     </script>

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
                        <h4>Reschedule Booking</h4>
                    </div>
                    <div class="card-body">
                    
                    <?php
                                    if(isset($_GET['booking_id']))
                                    {
                                        $booking_id = $_GET['booking_id'];

                                        $query = "SELECT * FROM bookings WHERE status='1' AND booking_id='$booking_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {
                                                ?>
                    
                        <div class="row">
                        <form action="booking-code.php" method="GET">
                            <div class="col-md-12">
                            <div class="form-group mb-3">
                                
                                                <div style="margin-left:100px;" class="form-group mb-3">
                                                    <label for=""><b>Booking ID:</b></label><a style="margin-left:95px;">
                                                    <?php echo $row['booking_id']; ?></a>
                                                </div>
                                                <hr style="margin-left:80px;width: 500px;"></hr>
                                                
                                                <div style="margin-left:80px;" class="col-md-10">
                                                    <label class="labels">Select New date of your appointment:</label>
                                                    <input type="text" name="date_visit" value="<?=$row['date_visit']?>" id="datevisit" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Date of Visit" autocomplete="off" data-parsley-required="" data-parsley-required-message="Date of Visit is required" readonly="">
                                                </div><br>

                                                <div style="margin-left:80px;" class="col-md-10 col-10">
                                                    <div class="form-group">
                                                    <label>Select new Session:</label>
                                                    <select class="form-control" name="time_visit" value="<?=$row['time_visit']?>" data-parsley-required="" data-parsley-required-message="Please select a session">
                                                    <option value="">Select session</option>
                                                    <option value="AM">AM</option>
                                                    <option value="PM">PM</option>
                                                    </select>
                                                    </div>  
                                                </div><br>
                                                
                                                
                                                <div class="col-12 p-0 mt-3"> 
                                                    <div style="margin-left:250px;" class="col-3 p-0 mt-3"> 
                                                    <button type="submit" name="new_sched" class="btn btn-info mb-5"  style="width:100%!important;">Save</button>
                                                    </div>
                                                </div>
                                                
                                                <?php
                                            }
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

    <!-- Modal -->
    <div class="modal fade" id="no-slot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body" id="loading-msg">           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>   

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="assets/js/main.js?v1"></script>
    <script src="assets/js/parsely.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>