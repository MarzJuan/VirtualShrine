<?php
session_start();

include('config/dbcon.php');


// REJECT BOOKING

if(isset($_POST['reject_booking']))
{
    $bookings_id = $_POST['reject_booking'];
    // 2 = Reject
    $query = "UPDATE bookings SET status='2' WHERE booking_id='$bookings_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
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

// ACCEPT BOOKING

if(isset($_POST['approve_booking']))
{
    $bookings_id = $_POST['approve_booking'];
    // 1 = Accept
    $query = "UPDATE bookings SET status='1' WHERE booking_id='$bookings_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
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

// RECOVER ARCHIVED POST

if(isset($_POST['post_recover']))
{
    $posts_id = $_POST['post_recover'];
    // 0 = Visible
    $query = "UPDATE posts SET status='0' WHERE id='$posts_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Post Recovered Successfully";
        header('Location: post-archive.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: post-archive.php');
        exit(0);
    }

}

// ARCHIVE POST
if(isset($_POST['post_archive']))
{
    $posts_id = $_POST['post_archive'];
    // 2 = Archived
    $query = "UPDATE posts SET status='1' WHERE id='$posts_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Post Archived Successfully";
        header('Location: post-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: post-view.php');
        exit(0);
    }
}

//EDIT POST
if(isset($_POST['post_update']))
{
    $posts_id = $_POST['post_id'];

    $category_id = $_POST['category_id'];
    
    $name = $_POST['name'];
    $slug = $_POST['slug'];
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

    $status = $_POST['status'] == true ? '1':'0';


    $query="UPDATE posts SET category_id='$category_id', name='$name', slug='$slug', description='$description', image='$update_filename',
                    meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', 
                    status='$status' WHERE id='$posts_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../uploads/posts/'.$old_filename)){
                unlink("../uploads/posts/'.$old_filename");
            {
            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$update_filename);
        }
        
            $_SESSION['message'] = "Post Updated Successfully";
            header('Location: post-edit.php?id='.$posts_id);
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: post-edit.php?id='.$posts_id);
            exit(0);
        }

        }
    }
}



//ADD POST
if(isset($_POST['post_add']))
{
    $category_id = $_POST['category_id'];
    
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $image = $_FILES['image']['name'];
    //rename this image
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

    $query = "INSERT INTO posts(category_id, name, slug, description, image, meta_title, meta_description, meta_keyword, status) VALUES
            ('$category_id','$name', '$slug', '$description', '$filename', '$meta_title', '$meta_description', '$meta_keyword')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
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



//CATEGORY ARCHIVE RECOVER
if(isset($_POST['archive_recover']))
{
    $category_id = $_POST['archive_recover'];
    // 0 = Visible
    $query = "UPDATE categories SET status='0' WHERE id='$category_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Recovered Successfully";
        header('Location: archive-category.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: archive-category.php');
        exit(0);
    }

}

//ARCHIVE CATEGORY
if(isset($_POST['category_archive']))
{
    $category_id = $_POST['category_archive'];
    // 2 = Archived
    $query = "UPDATE categories SET status='2' WHERE id='$category_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Archived Successfully";
        header('Location: category-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: category-view.php');
        exit(0);
    }
}



//EDIT CATEGORY
if(isset($_POST['edit_category']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE categories SET name='$name', slug='$slug', description='$description', meta_title='$meta_title',
     meta_description='$meta_description', meta_keyword='$meta_keyword', navbar_status='$navbar_status', 
     status='$status' WHERE id='$category_id' ";

     $query_run = mysqli_query($con, $query);

     if($query_run)
    {
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
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO categories(name, slug, description, meta_title, meta_description, meta_keyword, navbar_status, status) VALUES
            ('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$navbar_status', '$status')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Added Successfully";
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
        $_SESSION['message'] = "Admin Recovered Successfully";
        header('Location: archive-user.php');
        exit(0);
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

// ADD ASSISTANT ADMIN
if(isset($_POST['add_admin']))
{

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $role_as = $_POST['role_as'];
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
            $user_query = "INSERT INTO users (fname, lname, username, role_as, password) VALUES ('$fname', '$lname', '$username', '$role_as', '$password')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run)
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
        $password = $_POST['password'];
        $status = $_POST['status'] == true ? '1':'0';

        $query = "UPDATE users SET fname='$fname', lname='$lname', username='$username', password='$password', status='$status'
                    WHERE role_as=1 AND ID='$user_id' ";
        
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['message'] = "Updated Successfuly";
            header('Location: assistant-admin-list.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong!";
            header("Location: assistant-admin-list.php");
            exit(0);
        }
}

?>