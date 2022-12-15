<?php
include('config/dbcon.php');
include('Admin/admin/booking.php')
?>


<style>
  /*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-title h2 {
  font-size: 14px;
  font-weight: 500;
  padding: 0;
  line-height: 1px;
  margin: 0 0 5px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #aaaaaa;
  font-family: "Poppins", sans-serif;
}
.section-title h3::after {
  content: "";
  width: 30%;
  height: 1px;
  display: inline-block;
  background: #7b0002;
  margin: 4px 10px;
}
.section-title p {
  margin: 0;
  margin: 0;
  font-size: 36px;
  font-weight: 700;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  color: #151515;
}

</style>
<!doctype html>
<html lang = "en">
  <title>Online Reservation - VirtualShrine</title>
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
      <link rel="stylesheet" href="assets/css/style.css?v1">
      <script src="assets/js/jquery.min.js"></script>

      <link href="assets/css/jquery-ui.css" rel="stylesheet">
      <script src = "assets/js/jquery-ui.js"></script> 

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
    <div class="container mb-5">
      <div class="row">
        <div class="col-md-8 offset-md-2 pb-2">
          <div class="text-right"><a href="homepage.php">Home</a></div>
        </div>        
        <div class="col-md-8 offset-md-2 card pt-4 pb-4 pl-4 pr-4 form-heading">
          <img src="assets/img/crs-logo.png" class="nmp-logo m-auto">
          <h3 class="mt-2 mb-0">MUSEO NG KASAYSAYANG PAMPULITIKA NG PILIPINAS</h3>
          <div class="mt-3">Online Reservation Form</div>
        </div>
      </div>      
      <div class="row">
        <div class="col-md-8 offset-md-2 mt-3 p-0">
            <form action="booking-code.php" id="form1" name="form1" method="post" role="form" data-parsley-validate="" enctype="multipart/form-data">
              <div class="col-12 card p-4">


                <!--<div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label>Name of Museum</label>
                      <select class="form-control" name="m-building">
			<option disabled>Select Building</option>
                      <option value='1' >National Museum of Fine Arts</option><option value='2' disabled>National Museum of Anthropology</option><option value='3' >National Museum of Natural History</option><option value='4' disabled>All</option>  
                      </select>
                    </div> 
                  </div>
                </div> -->


                
                <h4>&nbsp;</h4>

                <div class="row">
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label>Date of Visit<span style="color:red;">*</span></label>
                      <input type="text" name="date_visit" value="" id="datevisit" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Date of Visit" autocomplete="off" data-parsley-required="" data-parsley-required-message="Date of Visit is required" readonly="">
                    </div>
                  </div>

                 <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label>Session<span style="color:red;">*</span></label>
                      <select class="form-control" name="time_visit" data-parsley-required="" data-parsley-required-message="Please select a session">
                      <option value="">Select session</option>
                      <option value="AM">AM</option>
                      <option value="PM">PM</option>
                    </select>
                    </div>  
                  </div>


                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label>No. of Visitor<span style="color:red;">*</span></label>
                      <input type="number" min="1" max="50" class="form-control" name="no_visitors" data-parsley-required="" data-parsley-required-message="Please select number of pax">
                      </input>
                    </div>   
                  </div>  
              </div>  


              <h1><span style="padding-top: 50px;"></span></h1>
              <hr>
                  
                <div class="section">
                  <h3>Name of Representative</h3>
                </div>
                <h6>&nbsp;</h6>
                <div class="row">   
                  <div class="col-md-6 col-12">             
                    <div class="form-group">
                      <label for="email">First Name<span style="color:red;">*</span>
                      </label>
                      <input type="text" name="fname" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="First Name" autocomplete="off" data-parsley-required="" data-parsley-required-message="First Name is required">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="email">Last Name<span style="color:red;">*</span>
                      </label>
                      <input type="text" name="lname" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Last Name" autocomplete="off" data-parsley-required="" data-parsley-required-message="Last Name is required">
                    </div>  
                  </div>
                </div>      
                <div class="row">   
                  <div class="col-md-6 col-12">             
                    <div class="form-group">
                      <label for="pwd">Email<span style="color:red;">*</span>
                      </label>
                      <input type="text" name="email" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Email" autocomplete="off" data-parsley-required="" data-parsley-type="email" data-parsley-error-message="Invalid Email">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="email">Mobile Number<span style="color:red;">*</span>
                      </label>
                      <input type="number" name="phone_no" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Mobile Number" autocomplete="off" data-parsley-required="" data-parsley-type="digits" data-parsley-required-message="Mobile Number is required" data-parsley-type="digits">
                    </div> 
                  </div>
                </div>

                <div class="row">   
                  
              <!--<div class="col-md-6 col-12">
                    <div class=" form-group">
                      <label for="email">Address:
                      </label>
                      <textarea name="m-address[]" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Address" autocomplete="off" data-parsley-required="" data-parsley-required-message="Address is required"></textarea>
                    </div>
                  </div>
              -->


                  <div class="col-md-12 mb-3">
                    <label for="">Attach ID<span style="color:red;">*</span></label>
                    <input type="file" name="id_image" class="form-control" accept=".jpg,.png,.gif,.webp" aria-required="true" aria-invalid="false" data-parsley-required-message="Attach ID is required"/>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="form-group">
                      <label for="email">Name of Company/Agency (If applicable)</label>
                      <input type="text" name="org_name" value="" class="form-control input-md" aria-invalid="false" placeholder="Name of Company/Agency">
                    </div>
                  </div>                
                      <!-- <div class="col-md-6 col-12">   
                        <div class="form-group">
                          <label>Upload file</label>
                          <input type="file" id="myFile" name="filename">
                        </div>
                      </div> -->
                      <div class="col-12 p-0 mt-3"> 
                          <div class="col-12 p-0 mt-3"> 
                            
                            <button type="submit" name="submit_booking" class="btn btn-info mb-5" value="Confirm" id="butsave" style="width:100%!important;">Confirm</button>
                          </div>
                    </div>

                </div> 
              </div>
            </form>
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

    <script src="assets/js/main.js?v1"></script>
    <script src="assets/js/parsely.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>