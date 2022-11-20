<?php
include('config/dbcon.php');
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
      <div class="row">

        <div class="col-md-8 offset-md-2 card pt-4 pb-4 pl-4 pr-4 mt-3">
        <form action="booking-code.php" id="form1" name="form1" method="post" role="form" data-parsley-validate="" enctype="multipart/form-data">
          <div class="text-center"><span style="color:#1D1E4E;font-size:30px" ><b>Reservation Information</b></span></div>
          <hr>

          <h4>&nbsp;</h4>
                <div class="row">   
                  <div style="margin-left: 130px" class="col-md-8 col-12">             
                    <div class="form-group">
                      <label for="email">Insert Booking ID:
                      </label>
                      <input type="text" name="booking_id" value="<?php if(isset($_GET['booking_id'])){echo $_GET['booking_id'];} ?>" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Booking ID" autocomplete="off" data-parsley-required="" data-parsley-required-message="Booking ID is required">
                    </div>
                  </div>

                  <div style="margin-left: 270px; justify-content: center;" class="col-6 p-0 mt-3"> 
                          <div class="col-6 p-0 mt-3"> 
                            <button type="submit" name="submit_id" class="btn btn-info mb-5" style="width:100%!important;">Submit</button>
                          </div>
                    </div>
                        
        
              <input type="hidden" class="form-check-input" id="consent">
              <p class="form-check-label font-italic text-center" for="exampleCheck1">
		<!--Following the recent announcement of the Inter-Agency Task Force for the Management of Infectious Diseases (IATF) placing the National Capital Region under Alert Level 1 from March 1-15, 2022, the National Museum Complex in Manila will now accept walk-in visitors starting tomorrow, March 1, 2022, while advanced booking through reservation@nationalmuseum.gov.ph <b>SHALL ONLY BE REQUIRED FOR GROUPS OF 20-30-PERSONS</b>.-->
        <h3><p style="visibility: hidden;"> 
          Hidden Text Hidden Text Hidden Text Hidden 
            </p> </h3>    
        <h1>&nbsp;</h1>

            
          

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

    <script src="assets/js/main.js?v1"></script>
    <script src="assets/js/parsely.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
