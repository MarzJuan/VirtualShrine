
<!doctype html>
<html lang = "en">
<title>Online Reservation - VirtualShrine</title>
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <head>
    <link rel="icon" type="image/png" href="assets/img/crs-logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js?v0.1"></script>
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
          <div class="mt-3">Online Reservation Form</div>
        </div>
      </div>      
      <div class="row">
        <div class="col-md-8 offset-md-2 card pt-4 pb-4 pl-4 pr-4 mt-3">
          <form>
          <h1>&nbsp;</h1>
              <input type="hidden" class="form-check-input" id="consent">
              <p class="form-check-label font-italic text-center" for="exampleCheck1">
		<!--Following the recent announcement of the Inter-Agency Task Force for the Management of Infectious Diseases (IATF) placing the National Capital Region under Alert Level 1 from March 1-15, 2022, the National Museum Complex in Manila will now accept walk-in visitors starting tomorrow, March 1, 2022, while advanced booking through reservation@nationalmuseum.gov.ph <b>SHALL ONLY BE REQUIRED FOR GROUPS OF 20-30-PERSONS</b>.-->
		Thank you! Your reservation is now being processed. Please expect a confirmation receipt which will be sent to your email. Kindly also check your spam folder. If in case you did not receive a confirmation, please contact (044) 931-2508
 or email mpph@nhcp.gov.ph

            <h1>&nbsp;</h1>
            
          

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    </div>
    <!-- Modal -->
    <div class="modal fade" id="accept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            Please check the user privacy consent box to signify that you have read and consented thereto.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>  

    <script type="text/javascript">
      
      $('#confirm-individual, #Proceed-booking').click(function(){

          if($('#consent').prop('checked')){

          } 
          else 
          {
            $('#accept').modal('show');
            return false;
          }
      });
      

    </script>
    <script src="assets/js/bootstrap.min.js"></script>

    

  </body>
</html>
