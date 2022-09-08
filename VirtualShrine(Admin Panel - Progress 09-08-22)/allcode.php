<?php

session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();

    $_SESSION['message'] = "Logged out successfuly";
    header("Location: login.php");
    exit(0);
}

?>