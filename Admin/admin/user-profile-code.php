<?php
include('authentication.php');

if(isset($_POST['change_pass']))
{
    $user_id = $_POST['user_id'];
    $old_pass = $_POST['password'];
	$new_pass = $_POST['newpassword'];
	$re_pass = $_POST['renewpassword'];

	$password_query = mysqli_query($con,"SELECT * FROM users WHERE id = '$user_id'");
	$password_row = mysqli_fetch_array($password_query);
	$database_password = $password_row['password'];
	if ($database_password == $old_pass)
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd = mysqli_query($con,"UPDATE users SET password='$new_pass' WHERE id = '$user_id'");
			
            $_SESSION['message'] = "Password Updated Successfuly";
            header('Location: user-profile.php?id='.$user_id);
            exit(0);
			}
		  else
			{
            $_SESSION['message'] = "Password did not match";
            header('Location: user-profile.php?id='.$user_id);
            exit(0);
			}
            }
        else
            {
                $_SESSION['message'] = "Incorrect Old Password";
                header('Location: user-profile.php?id='.$user_id);
                exit(0);
            }
	}



if(isset($_POST['save_changes']))
{
    $user_id = $_POST['user_id'];

    $old_filename = $_POST['old_image'];
    $image = $_FILES['profileImage']['name'];

    $update_filename = "";
    if($image != NULL)
    {
    //rename this image
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;

        $update_filename = $filename;
    }
    else
    {
        $update_filename = $old_filename;
    }
                      
    $firstname = $_POST['fname'];
    $lower_fname = strtolower($firstname);
    $final_firstname = ucwords($lower_fname);
    $fname = $final_firstname;

    $lastname = $_POST['lname'];
    $lower_lname = strtolower($lastname);
    $final_lastname = ucwords($lower_lname);
    $lname = $final_lastname;

    $username = $_POST['username'];
    $email = $_POST['email'];

                      
    $query = "UPDATE users SET fname='$fname', lname='$lname', username='$username', email='$email', profileImage='$update_filename' WHERE id = '$user_id' ";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated their profile information')";
        $sql_run = mysqli_query($con, $sql);
        
        if($image != NULL)
            {
                if(file_exists('../uploads/user/'.$old_filename)){
                    unlink("../uploads/user/'.$old_filename");
                }
                move_uploaded_file($_FILES['profileImage']['tmp_name'], '../uploads/user/'.$update_filename);
            }

            $_SESSION['message'] = "Updated Successfuly";
            header('Location: user-profile.php?id='.$user_id);
            exit(0);

    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: user-profile.php?id='.$user_id);
        exit(0);
    }
                        
}

?>