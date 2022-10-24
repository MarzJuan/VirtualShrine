<?php
session_start();
?>


<link rel="stylesheet" href="style.css">
        <div class="py5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">

                
                <div class="card">
                    <div class="card-header">
    
        <img src="image/VirtualShrineLogo.png">
        
        <div class="center">
            <div class="center-header">
            <h1>Login</h1>
            </div>
            
            <hr>

            <div class="center-body">

            <?php include('message.php')?>

            <form action="logincode.php" method="post">
                <div class="txt_field">
                    <input type="username" required name="username">
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" required name="password">
                    <span></span>
                    <label>Password</label>
                </div>
                <input type="submit" name="login_btn" class="btn btn-primary" value="Login"></input>
                <div class="MainAdmin_link"></div>


            </form>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>

<!-- Modal
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
    <script src="assets/js/bootstrap.min.js"></script> -->

    </body>
</html>