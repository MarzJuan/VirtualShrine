<?php
session_start();
include('admin/config/dbcon.php');
include('security.php');

if(isset($_POST['login_btn']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE BINARY username='$username' AND BINARY password='$password' LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run)>0)
    {
        foreach($login_query_run as $data)
    {
            $user_id = $data['id'];
            $user_name = $data['username'];
            $role_as = $data['role_as'];
    }

        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as"; // 0 = Head Admin, 1 = Assistant Admin
        
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
        ];

        if($_SESSION['auth_role'] == '0') // Head Admin
        {
            $_SESSION['message'] = "Welcome to Super Admin dashboard"." ".$user_name;
            header("Location: admin/index.php?id=" . $_SESSION['id']);
            exit(0);
        }
        elseif($_SESSION['auth_role'] == '1') // Assistant Admin
        {
            $_SESSION['message'] = "Welcome to Assistant Admin dashboard"." ".$user_name;
            header("Location: admin/index.php?id=" . $_SESSION['id']);
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid username or password";
        header("Location: login.php");
        exit(0);
    }
}
else
{
    $_SESSION['message'] = "You are not allowed to access this file";
    header("Location: security.php");
    exit(0);
}
?>