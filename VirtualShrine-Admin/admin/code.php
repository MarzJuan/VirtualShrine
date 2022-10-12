<?php
include('authentication.php');

//EDIT PROFILE
if (isset($_POST['edit_profile']))
{
            $user_id = $_POST['user_id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $profileImage = $_FILES['profileImage']['name'];
                //rename this image
                $image_extension = pathinfo($profileImage, PATHINFO_EXTENSION);
                $filename = time().'.'.$image_extension;



        $query = "UPDATE users SET fname='$fname', lname='$lname', username='$username', email='$email', password='$password', profileImage='$filename'
                    WHERE ID='$user_id' ";
                
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated their Profile')";
            $sql_run = mysqli_query($con, $sql);
            
            if($sql_run)
            {
                move_uploaded_file($_FILES['profileImage']['tmp_name'], '../uploads/user/'.$filename);
                $_SESSION['message'] = "Updated Successfuly";
                header("Location: user-profile.php?id=". $_SESSION['auth_user']['user_id']);
                exit(0);
            }
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong!";
            header("Location: user-profile.php?id=". $_SESSION['auth_user']['user_id']);
            exit(0);
        }
}

// ADD AUDIO
if (isset($_POST['audio_add']) && isset($_FILES['my_audio'])) 
{

    $audio_name = $_FILES['my_audio']['name'];
    $tmp_name = $_FILES['my_audio']['tmp_name'];
    $error = $_FILES['my_audio']['error'];

    if ($error === 0) {
    	$audio_ex = pathinfo($audio_name, PATHINFO_EXTENSION);

    	$audio_ex_lc = strtolower($audio_ex);

    	$allowed_exs = array("mp3", '3gp', 'm4a', 'wav', 'm3u', 'ogg');

    	if (in_array($audio_ex_lc, $allowed_exs)) {
    		
    		$new_audio_name = uniqid("audio-", true). '.'.$audio_ex_lc;
    		$audio_upload_path = '../uploads/audio/'.$new_audio_name;
    		move_uploaded_file($tmp_name, $audio_upload_path);


        $category_id = $_POST['category_id'];
        $title = $_POST['title'];

        $query = "INSERT INTO audio(title, category_id, audio) VALUES ('$title', '$category_id', '$new_audio_name')";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Added an Audio Content')";
            $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                $_SESSION['message'] = "Audio Created Successfully";
                header('Location: audio-add.php');
                exit(0);
            }
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: audio-add.php');
            exit(0);
        }

    }
}
}


// REJECT BOOKING

if(isset($_POST['reject_booking']))
{
    $bookings_id = $_POST['reject_booking'];
    // 2 = Reject
    $query = "UPDATE bookings SET status='2' WHERE booking_id='$bookings_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Rejected a Booking')";
            $sql_run = mysqli_query($con, $sql);

            if($sql_run)
            {
                $_SESSION['message'] = "Booking has been Rejected";
                header('Location: booking-pending.php');
                exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: booking-pending.php');
        exit(0);
    }

}
}

// ACCEPT BOOKING

if(isset($_POST['approve_booking']))
{
    $bookings_id = $_POST['approve_booking'];
    // 1 = Accept
    $query = "UPDATE bookings SET status='1' WHERE booking_id='$bookings_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Confirmed a Booking')";
            $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                $_SESSION['message'] = "Booking has been Approved";
                header('Location: booking-pending.php');
                exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: booking-pending.php');
        exit(0);
    }

}
}





//EDIT POST
if(isset($_POST['post_update']))
{
    $post_id = $_POST['post_id'];

    $category_id = $_POST['category_id'];
    
    $name = $_POST['name'];

    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $description = $_POST['description'];
    
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

   

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

    $status = $_POST['status'] == true ? '0':'1';



    $query = "UPDATE posts SET category_id='$category_id', name='$name', slug='$slug', description='$description', image='$update_filename',
                    meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', 
                    status='$status' WHERE id='$post_id' ";
    
    $query_run = mysqli_query($con, $query);

    
    if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated a Gallery Content')";
            $sql_run = mysqli_query($con, $sql);

            if($image != NULL)
            {
                if(file_exists('../uploads/posts/'.$old_filename)){
                    unlink("../uploads/posts/'.$old_filename");
                }
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$update_filename);
            }
            
                $_SESSION['message'] = "Post Updated Successfully";
                header('Location: post-edit.php?id='.$post_id);
                exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: post-edit.php?id='.$post_id);
            exit(0);
        }

}
    




//ADD POST
if(isset($_POST['post_add']))
{
    $category_id = $_POST['category_id'];
    
    $name = $_POST['name'];
   
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $description = $_POST['description'];
    $year = $_POST['year'];
    $object_type = $_POST['object_type'];
    
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $image = $_FILES['image']['name'];
    //rename this image
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

    $status = $_POST['status'] == true ? '0':'1';

    $query = "INSERT INTO posts(category_id, name, slug, description, year, object_type, image, meta_title, meta_description, meta_keyword, status) VALUES
            ('$category_id','$name', '$slug', '$description', '$year', '$object_type', '$filename', '$meta_title', '$meta_description', '$meta_keyword', '$status')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
        $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Added a Gallery Content')";
        $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$filename);
                $_SESSION['message'] = "Post Created Successfully";
                header('Location: post-add.php');
                exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: post-add.php');
        exit(0);
    }

}
}


//EDIT CATEGORY
if(isset($_POST['edit_category']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $description = $_POST['description'];
    
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

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

    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '0':'1';

    $query = "UPDATE categories SET name='$name', slug='$slug', description='$description', meta_title='$meta_title',
     meta_description='$meta_description', meta_keyword='$meta_keyword', image='$update_filename', status='$status' 
     WHERE id='$category_id' ";

     $query_run = mysqli_query($con, $query);

     if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated a Category')";
            $sql_run = mysqli_query($con, $sql);

            if($image != NULL)
            {
                if(file_exists('../uploads/category/'.$old_filename)){
                    unlink("../uploads/category/'.$old_filename");
                }
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/category/'.$update_filename);
            }

            $_SESSION['message'] = "Category Updated Successfully";
            header('Location: category-edit.php?id=' .$category_id);
            exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: category-edit.php?id=' .$category_id);
        exit(0);
    }
}

// ADD CATEGORY
if(isset($_POST['add_category']))
{
    $name = $_POST['name'];
    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;
    
    $description = $_POST['description'];
    
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $image = $_FILES['image']['name'];
    //rename this image
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

    // $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '0':'1';

    $query = "INSERT INTO categories(name, slug, description, meta_title, meta_description, meta_keyword, image, status) VALUES
            ('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$filename', '$status')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
        $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated an information')";
        $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/category/'.$filename);
                $_SESSION['message'] = "Category Created Successfully";
                header('Location: category-add.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong";
                header('Location: category-add.php');
                exit(0);
            }
        }
}


// RECOVERING ASSISTANT ADMIN DATA
if(isset($_POST['assistant-admin-recover']))
{
    $user_id = $_POST['assistant-admin-recover'];

    $query = " INSERT INTO users SELECT * FROM user_archive WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);
    
    $query = " DELETE FROM user_archive WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);

    $query = " UPDATE user_archive SET status=0 WHERE id='$user_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Recovered a User Data')";
            $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                $_SESSION['message'] = "Admin Recovered Successfully";
                header('Location: archive-user.php');
                exit(0);
            }
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: archive-user.php');
            exit(0);
        }


}


// ARCHIVING ASSISTANT ADMIN DATA
if(isset($_POST['assistant-admin-archive']))
{
    $user_id = $_POST['assistant-admin-archive'];

    $query = " INSERT INTO user_archive SELECT * FROM users WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);

    $query = " DELETE FROM users WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);

    $query = " UPDATE user_archive SET status=1 WHERE id='$user_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);


    if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Archived a Admin Data')";
            $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                $_SESSION['message'] = "Admin Archived Successfully";
                header('Location: assistant-admin-list.php');
                exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: assistant-admin-list.php');
        exit(0);
    }

}
}

// ADD ASSISTANT ADMIN
if(isset($_POST['add_admin']))
{

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $role_as = $_POST['role_as'];
    $image = mysqli_real_escape_string($con, $_POST['image']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);

    if($password == $confirm_password)
    {
        //Check username
        $checkusername = "SELECT username FROM users WHERE username='$username'";
        $checkusername_run = mysqli_query($con, $checkusername);

        if(mysqli_num_rows($checkusername_run) > 0)
        {
            //Username already exists
            $_SESSION['message'] = "Username unavailable";
            header("Location: assistant-admin-add.php");
            exit(0);
        }
        else
        {
            $user_query = "INSERT INTO users (fname, lname, username, email, role_as, password) VALUES ('$fname', '$lname', '$username', '$email', '$role_as', '$password')";
            $user_query_run = mysqli_query($con, $user_query);

                if($query_run)
                {
                    $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Added a New Admin')";
                    $sql_run = mysqli_query($con, $sql);
                    if($sql_run)
                    {
                        $_SESSION['message'] = "Added Succesfully";
                        header("Location: assistant-admin-add.php");
                        exit(0);
                    }
                    else
                    {
                        $_SESSION['message'] = "Something Went Wrong!";
                        header("Location: assistant-admin-add.php");
                        exit(0);
                    }
                }
            }
                
    }
    else
    {
        $_SESSION['message'] = "Password does not match";
        header("Location: assistant-admin-add.php");
        exit(0);
    }

}



// UPDATE ASISTANT ADMIN INFORMATION
if(isset($_POST['update_information']))
{

        $user_id = $_POST['user_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $status = $_POST['status'] == true ? '1':'0';

        $query = "UPDATE users SET fname='$fname', lname='$lname', username='$username', email='$email', password='$password', status='$status'
                    WHERE role_as=1 AND ID='$user_id' ";
                
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated an Admin Information')";
            $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                $_SESSION['message'] = "Updated Successfuly";
                header('Location: assistant-admin-edit.php?id='.$user_id);
                exit(0);
            }
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong!";
            header('Location: assistant-admin-edit.php?id='.$user_id);
            exit(0);
        }
}



?>