<?php

if($_SESSION['auth_role'] != "0")
    {
        $_SESSION['message']="You are not Authorised as Super Admin";
        header("Location: index.php");
        exit(0);
    }

?>