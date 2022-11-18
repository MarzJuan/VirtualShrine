<?php
include('authentication.php');

if(isset($_POST['save_changes']))
{
    $user_id = $_POST['user_id'];
                      
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

    $old_filename = $_POST['old_image'];
    $image = $_FILES['image']['name'];

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

                      
    $query = "UPDATE users SET fname='$fname', lname='$lname', username='$username', email='$email' WHERE id = '$user_id', profileImage='$update_filename' ";
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
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/user/'.$update_filename);
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