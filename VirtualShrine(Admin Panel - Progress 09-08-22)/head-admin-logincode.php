<?php

session_start();
include('admin/config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role_as=0 LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run)>0)
    {
        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_name = $data['fname'].' '.$data['lname'];
    }

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
        ];

        if($_SESSION['auth_user'] == TRUE)
        {
            $_SESSION['message'] = "Welcome to dashboard";
            header("Location: admin/index.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid username or password";
        function function_alert($message){
            echo "<script>alert('$message');</script>";
        }
        header("Location: head-admin-login.php");
        exit(0);
    }
}
else
{
    $_SESSION['message'] = "You are not allowed to access this file";
    header("Location: errors/dberror.php");
    exit(0);
}
?>