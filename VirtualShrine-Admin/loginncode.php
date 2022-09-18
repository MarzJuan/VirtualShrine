<?php
session_start();
include('admin/config/dbcon.php')

if(isset($_POST['login_btn']))
{
    $username = mysqli_escape_string($con, $_POST['username'];)
    $password = mysqli_escape_string($con, $_POST['password'];)

    $login_query = "SELECT * FROM users WHERE username='$username' AND password='$password'LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_id = $data['fname'].' '.$data['lname'];
            $user_id = $data['username'];
            $user_id = $data['role_as'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = "$role_as"[
            'user_id'=>$user_id,
            'username'=>$username,
        ];

        if($_SESSION['auth_role'] == '0') // 0 = Head Admin
        {
            $_SESSION['message'] = "Welcome to Dashboard Head Admin";
            header("Location: admin/index.php");
            exit(0);
        }
        elseif($_SESSION['auth_role'] == '1') // 1 = Assistant Admin
        {
            $_SESSION['message'] = "Welcome to Dashboard Admin";
            header("Location: admin/index.php");
            exit(0);
        }
    }
}
else
{
    $_SESSION['message'] = "You are not allowed to access";
    header("Location: loginn.php");
    exit(0);
}
?>