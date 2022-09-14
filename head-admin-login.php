<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <meta charset="utf-8">
        <title>Head Admin-Login Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php include('message.php');?>
        <img src="image/VirtualShrineLogo.png">
        <div class="center">
            <h1>Login</h1>
            <hr>
            <form action="head-admin-logincode.php" method="post">
                <div class="txt_field">
                    <input type="text" required name="username">
                    <label>Head Admin Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" required name="password">
                    <span></span>
                    <label>Password</label>
                </div>
                <input type="submit" name="login_btn" class="btn btn-primary" value="Login"></input>
                <div class="MainAdmin_link"></div>
                login as <a href="login.php">assistant administrator</a>

            </form>
        </div>
    </body>
</html>