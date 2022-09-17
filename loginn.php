<?php
session_start();
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php include('message.php')?>

                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">

                    <form action="loginncode.php" method="POST"></form>
                    <div class="form-group mb-3">
                        <label>Username</label>
                        <input type="username" name="username" required placeholder="Username" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" name="password" required placeholder="Password" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                    </div>



                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>