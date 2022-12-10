<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include('authentication.php');

//EDIT DISPLAY EXHIBIT
if(isset($_POST['exhibit_display_update']))
{
    $display_id = $_POST['exhibit_display_update'];

    $exhibit_id = $_POST['exhibit_id'];
    
    $post_name = mysqli_real_escape_string($con,$_POST['name']);
    $final_postname = ucwords($post_name);
    $name = $final_postname;

    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $description = mysqli_real_escape_string($con, $_POST['description']);
    $year = $_POST['year'];
    $object_type = $_POST['object_type'];

    $meta_title =  mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description =  mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword =  mysqli_real_escape_string($con, $_POST['meta_keyword']);
    
    // $audio_old_filename = $_POST['old_audio'];
    // $audio = $_FILES['audio']['name'];

    // $update_filename = "";
    // if($audio != NULL)
    // {
    // //rename this image
    //     $audio_extension = pathinfo($audio, PATHINFO_EXTENSION);
    //     $filename = time().'.'.$audio_extension;

    //     $update_filename = $filename;
    // }
    // else
    // {
    //     $update_filename = $audio_old_filename;
    // }
   

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



    $query = "UPDATE exhibit_display SET exhibit_id='$exhibit_id', name='$name', slug='$slug', description='$description', year='$year', object_type='$object_type', 
            image='$update_filename', meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', 
                    status='$status' WHERE display_id='$display_id' ";
    
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated a Gallery Content')";
            $sql_run = mysqli_query($con, $sql);

            if($image != NULL)
            {
                if(file_exists('../uploads/exhibit/image/'.$old_filename)){
                    unlink("../uploads/exhibit/image/'.$old_filename");
                }
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/exhibit/image/'.$update_filename);
            }
            
                $_SESSION['message'] = "Post Updated Successfully";
                header('Location: exhibit-display-edit.php?display_id='.$display_id);
                exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: exhibit-display-edit.php?display_id='.$display_id);
            exit(0);
        }

}
    

// ADD DISPLAY EXHIBIT
if(isset($_POST['display_add']))
{

    $exhibit_id = $_POST['exhibit_id'];
    
    $post_name = mysqli_real_escape_string($con, $_POST['name']);
    $final_postname = ucwords($post_name);
    $name = $final_postname;
   
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $description = mysqli_real_escape_string($con, $_POST['description']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $object_type = mysqli_real_escape_string($con, $_POST['object_type']);
    
    $meta_title =  mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description =  mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword =  mysqli_real_escape_string($con, $_POST['meta_keyword']);

    $imageCount = count ($_FILES['image']['name']);
    for ($i=0;$i<$imageCount;$i++){
        $imageName = $_FILES['image']['name'][$i];
        $imageTempName = $_FILES['image']['tmp_name'][$i];
        $targetPath = '../uploads/exhibit/image/'.$imageName;
        if(move_uploaded_file($imageTempName, $targetPath)){

    $status = $_POST['status'] == true ? '0':'1';

    $query = "INSERT INTO exhibit_display(exhibit_id, name, slug, description, year, object_type, image, audio, meta_title, meta_description, meta_keyword, status) VALUES
            ('$exhibit_id','$name', '$slug', '$description', '$year', '$object_type', '$imageName', '$new_audio_name', '$meta_title', '$meta_description', '$meta_keyword', '$status')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $last_id = mysqli_insert_id($con);
            if ($last_id){
                $code = rand(1,99999);
                $display_id = "CRSEXDIS_".$code."_".$last_id;
                $query = "UPDATE exhibit_display SET displayID = '".$display_id."' WHERE display_id = '".$last_id."'";
                $res = mysqli_query($con, $query);
            }
            
        $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Added a Exhibit Display Content')";
        $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                $_SESSION['message'] = "Exhibit Display Was Added Successfully";
                header('Location: exhibit-display-add.php');
                exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: exhibit-display-add.php');
        exit(0);
    }
        }
    }

}
}



// EDIT EXHIBIT
if(isset($_POST['exhibit_update']))
{
    
    $exhibit_id = $_POST['exhibit_id'];

    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    
    $exhibit_title = mysqli_real_escape_string($con, $_POST['exhibit_title']);
    $final_exhibitTitle = ucwords($exhibit_title);
    $title = $final_exhibitTitle;

    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $description = mysqli_real_escape_string($con, $_POST['description']);

    $meta_title =  mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description =  mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword =  mysqli_real_escape_string($con, $_POST['meta_keyword']);

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



    $query = "UPDATE exhibit SET start_date='$start_date', end_date='$end_date', name='$title', slug='$slug', description='$description', meta_title='$meta_title', 
    meta_description='$meta_description', meta_keyword='$meta_keyword', image='$update_filename', status='$status' 
    WHERE exhibit_id='$exhibit_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated an Exhibit')";
            $sql_run = mysqli_query($con, $sql);

            if($image != NULL)
            {
                if(file_exists('../uploads/exhibit/'.$old_filename)){
                    unlink("../uploads/exhibit/'.$old_filename");
                }
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/exhibit/'.$update_filename);
            }
                $_SESSION['message'] = "Exhibit Updated Successfully";
                header('Location: exhibit-edit.php?exhibit_id='.$exhibit_id);
                exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: exhibit-edit.php?exhibit_id='.$exhibit_id);
            exit(0);
        }

}

// ADD EXHIBIT
if(isset($_POST['add_exhibit']))
{

    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $cat_name = mysqli_real_escape_string($con, $_POST['name']);
    $final_categoryname = ucwords($cat_name);
    $name = $final_categoryname;
    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;
    
    $description = mysqli_real_escape_string($con, $_POST['description']);
    
    $meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword = mysqli_real_escape_string($con, $_POST['meta_keyword']);

    $image = $_FILES['image']['name'];
    //rename this image
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

    // $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '0':'1';

    $query = "INSERT INTO exhibit(name, slug, description, meta_title, meta_description, meta_keyword, image, status, start_date, end_date) VALUES
            ('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$filename', '$status', '$start_date', '$end_date')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $last_id = mysqli_insert_id($con);
            if ($last_id){
                $code = rand(1,99999);
                $exhibit_id = "CRSEXHBT_".$code."_".$last_id;
                $query = "UPDATE exhibit SET exhibitID = '".$exhibit_id."' WHERE exhibit_id = '".$last_id."'";
                $res = mysqli_query($con, $query);
            }

        $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Added a new Exhibit')";
        $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/exhibit/'.$filename);
                $_SESSION['message'] = "Exhibit Created Successfully";
                header('Location: exhibit-add.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong";
                header('Location: exhibit-add.php');
                exit(0);
            }
        }
}

// ADD SECTION
if(isset($_POST['add_section']))
{
    $cat_name = $_POST['name'];
    $final_categoryname = ucwords($cat_name);
    $name = $final_categoryname;

    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;
    
    $description = mysqli_real_escape_string($con, $_POST['description']);
    
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $image = $_FILES['image']['name'];
    //rename this image
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

    // $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '0':'1';

    $query = "INSERT INTO section(name, slug, description, meta_title, meta_description, meta_keyword, image, status) VALUES
            ('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$filename', '$status')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $last_id = mysqli_insert_id($con);
            if ($last_id){
                $code = rand(1,99999);
                $section_id = "CRSSEC_".$code."_".$last_id;
                $query = "UPDATE section SET sectionID = '".$section_id."' WHERE section_id = '".$last_id."'";
                $res = mysqli_query($con, $query);
            }

        $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Added a new Collection Category')";
        $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/section/'.$filename);
                $_SESSION['message'] = "Category Created Successfully";
                header('Location: section-add.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong";
                header('Location: section-add.php');
                exit(0);
            }
        }
}


// EDIT BLOG
if(isset($_POST['blog_update']))
{
    $blog_id = $_POST['blog_id'];
    
    $blog_title = $_POST['blog_title'];
    $final_blogTitle = ucwords($blog_title);
    $title = $final_blogTitle;

    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $author = $_POST['author'];

    $description = mysqli_real_escape_string($con, $_POST['description']);

    $meta_title =  mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description =  mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword =  mysqli_real_escape_string($con, $_POST['meta_keyword']);

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



    $query = "UPDATE blog SET name='$title', slug='$slug', description='$description', image='$update_filename', 
            meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', 
            author='$author', status='$status' WHERE blog_id='$blog_id' ";
    
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated a Blog')";
            $sql_run = mysqli_query($con, $sql);

            if($image != NULL)
            {
                if(file_exists('../uploads/blog/'.$old_filename)){
                    unlink("../uploads/blog/'.$old_filename");
                }
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/blog/'.$update_filename);
            }
                $_SESSION['message'] = "Blog Updated Successfully";
                header('Location: blog-edit.php?blog_id='.$blog_id);
                exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: blog-edit.php?blog_id='.$blog_id);
            exit(0);
        }

}

//ADD BLOG
if(isset($_POST['blog_add']))
{
    
    $blog_title = $_POST['blog_title'];
    $final_blogname = ucwords($blog_title);
    $title = $final_blogname;
   
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $author_name =  mysqli_real_escape_string($con, $_POST['author']);
    $final_authorname = ucwords($author_name);
    $author = $final_authorname;

    $description = mysqli_real_escape_string($con, $_POST['description']);
    
    $meta_title =  mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description =  mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword =  mysqli_real_escape_string($con, $_POST['meta_keyword']);

    $imageCount = count ($_FILES['image']['name']);
    for ($i=0;$i<$imageCount;$i++){
        $imageName = $_FILES['image']['name'][$i];
        $imageTempName = $_FILES['image']['tmp_name'][$i];
        $targetPath = '../uploads/blog/'.$imageName;
        if(move_uploaded_file($imageTempName, $targetPath)){

    $status = $_POST['status'] == true ? '0':'1';

    $query = "INSERT INTO blog(name, slug, description, image, meta_title, meta_description, meta_keyword, author, status) VALUES
            ('$title', '$slug', '$description', '$imageName', '$meta_title', '$meta_description', '$meta_keyword', '$author', '$status')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $last_id = mysqli_insert_id($con);
            if ($last_id){
                $code = rand(1,99999);
                $blog_id = "CRSBLOG_".$code."_".$last_id;
                $query = "UPDATE blog SET blogID = '".$blog_id."' WHERE blog_id = '".$last_id."'";
                $res = mysqli_query($con, $query);
            }
            
        $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Created a New Blog')";
        $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                $_SESSION['message'] = "Blog Created Successfully";
                header('Location: blog-add.php');
                exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: blog-add.php');
        exit(0);
    }
        }
    }

}
}

// EDIT PROFILE
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


        $query = "UPDATE users SET fname='$fname', lname='$lname', username='$username', email='$email', password='$password'
                    WHERE ID='$user_id' ";
        $query_run = mysqli_query($con, $query);
        // $query = "INSERT INTO users (profileImage) VALUES ('$filename') WHERE ID='$user_id'";
        // $query_run = mysqli_query($con, $query);

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

//EDIT AUDIO
if(isset($_POST['audio_update']))
{
    $audio_id = $_POST['audio_id'];
    $category_id = $_POST['category_id'];
    
    $audio_title = $_POST['name'];
    $final_audioname = ucwords($audio_title);
    $title = $final_audioname;

    $old_filename = $_POST['old_audio'];
    $audio = $_FILES['audio']['name'];

    $update_filename = "";
    if($audio != NULL)
    {
    //rename this image
        $audio_extension = pathinfo($audio, PATHINFO_EXTENSION);
        $filename = time().'.'.$audio_extension;

        $update_filename = $filename;
    }
    else
    {
        $update_filename = $old_filename;
    }

    $status = $_POST['status'] == true ? '0':'1';



    $query = "UPDATE audio SET category_id='$category_id', title='$title', audio='$update_filename',
                    status='$status' WHERE audio_id='$audio_id' ";
    $query_run = mysqli_query($con, $query);

    
    if($query_run)
        {
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Updated a Audio Guide Content')";
            $sql_run = mysqli_query($con, $sql);

            if($audio != NULL)
            {
                if(file_exists('../uploads/audio/'.$old_filename)){
                    unlink("../uploads/audio/'.$old_filename");
                }
                move_uploaded_file($_FILES['audio']['tmp_name'], '../uploads/audio/'.$update_filename);
            }
            
                $_SESSION['message'] = "Audio Updated Successfully";
                header('Location: audio-edit.php?audio_id='.$audio_id);
                exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: audio-edit.php?audio_id='.$audio_id);
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
                    
                    $res  = mysqli_query($con,"SELECT bookingID, email, fname, lname, date_visit, time_visit, no_visitors FROM bookings WHERE booking_id='$bookings_id'");

                    $row = mysqli_fetch_assoc($res);
                    $to = $row["email"];
                    $bookingID = $row["bookingID"];
                    $fname = $row["fname"];
                    $lname = $row["lname"];
                    $date_visit = $row["date_visit"];
                    $time_visit = $row["time_visit"];
                    $no_visitors = $row["no_visitors"];
                    

                    require 'EMAIL/mymail/vendor/autoload.php';

                    $mail = new PHPMailer(true);

                    $mail->isSMTP();// Set mailer to use SMTP
                    $mail->CharSet = "utf-8";// set charset to utf8
                    $mail->SMTPAuth = true;// Enable SMTP authentication
                    $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

                    $mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
                    $mail->Port = 587;// TCP port to connect to
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    $mail->isHTML(true);// Set email format to HTML

                    $mail->Username = 'virtualshrine.developers@gmail.com';// SMTP username
                    $mail->Password = 'cttkljrtkwfbawhf';// SMTP password

                    $mail->setFrom('virtualshrine.developers@gmail.com', 'MKPP Reservation');//Your application NAME and EMAIL
                    $mail->Subject = 'Casa Real Shrine Online Reservation';//Message subject
                    $mail->MsgHTML('<b>Your booking reservation is rejected!</b><br>
                                    <p>Booking Number: '.$bookingID.'<br>
                                    Name: '.$fname.' '.$lname.'<br>
                                    Date of Visit: '.$date_visit.'<br>
                                    No. of Visitors: '.$no_visitors.'<br>
                                    Museum: Museo ng Kasaysayang Pampulitika ng Pilipinas<br><br>
                                    Hi '.$fname.',<br>
                                    Your booking reservation for the museum visit has been rejeted!<br><br>
                                    <b>Please make sure to follow the following booking instructions:<br><br>
                                    1. Visiting Hours for Museum</b><br>
                                    <ul><li><b>Tuesday to Sunday</b>, excluding religious holidays, with morning session from
                                    <b>8:00 AM to 12:00 NN</b>, and afternoon session from <b>1:00 PM to 4:00 PM</b></ul>
                                    <ul><li>Please bring a photo ID with you.</li></ul>
                                    <ul><li>To help you plan for your visit, here is a <a href="http://localhost/VirtualShrine/Website/Plan.php">link </a>
                                        to the museum list of current exhibits.</li></ul><br><br>
                                    <b>2. Staying safe inside the Museum</b><br>
                                    <ul><li>A temperature scan will be taken of every visitor upon entry. Persons with a temperature of 37.5 degrees Celsius and above will not be allowed to enter. Likewise, any person with fever and flu-like symptoms will not be allowed to enter.</li></ul>
                                    <ul><li>Every individual must complete a health declaration form prior to entry to museum building. This will be facilitated as part of the online reservation process.</li></ul>
                                    <ul><li>Face mask must be worn at all times within the museum building.</li></ul>
                                    <ul><li>Visitors are allowed to bring their own sanitizing kits (small bottles of alcohol, small spray bottles, and tissue papers), but visitors must be mindful of their surroundings when using their sanitizing kits.</li></ul>
                                    <ul><li>Social distancing of at least <b>TWO (2)</b> meters between persons not belonging to the same household must be observed at all times.</li></ul><br><br>
                                    If you wish to cancel or reschedule this booking, please <a href="http://localhost/VirtualShrine/website/ReschedCancel_details.php">click here</a></p>');// Message body
                    $mail->addAddress($to);// Target email


                    $mail->send();


                $_SESSION['message'] = "Booking has been Rejected";
                header('Location: booking-pending.php');
                exit(0);
        }
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
            $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Confirmed a Booking')";
            $sql_run = mysqli_query($con, $sql);
            if($sql_run)
            {
                    
                    $res  = mysqli_query($con,"SELECT bookingID, email, fname, lname, date_visit, time_visit, no_visitors FROM bookings WHERE booking_id='$bookings_id'");

                    $row = mysqli_fetch_assoc($res);
                    $to = $row["email"];
                    $bookingID = $row["bookingID"];
                    $fname = $row["fname"];
                    $lname = $row["lname"];
                    $date_visit = $row["date_visit"];
                    $time_visit = $row["time_visit"];
                    $no_visitors = $row["no_visitors"];
                    

                    require 'EMAIL/mymail/vendor/autoload.php';

                    $mail = new PHPMailer(true);

                    $mail->isSMTP();// Set mailer to use SMTP
                    $mail->CharSet = "utf-8";// set charset to utf8
                    $mail->SMTPAuth = true;// Enable SMTP authentication
                    $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

                    $mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
                    $mail->Port = 587;// TCP port to connect to
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    $mail->isHTML(true);// Set email format to HTML

                    $mail->Username = 'virtualshrine.developers@gmail.com';// SMTP username
                    $mail->Password = 'cttkljrtkwfbawhf';// SMTP password

                    $mail->setFrom('virtualshrine.developers@gmail.com', 'MKPP Reservation');//Your application NAME and EMAIL
                    $mail->Subject = 'Casa Real Shrine Online Reservation';//Message subject
                    $mail->MsgHTML('<b>Your booking reservation is confirmed!</b><br>
                                    <p>Booking Number: '.$bookingID.'<br>
                                    Name: '.$fname.' '.$lname.'<br>
                                    Date of Visit: '.$date_visit.'<br>
                                    No. of Visitors: '.$no_visitors.'<br>
                                    Museum: Museo ng Kasaysayang Pampulitika ng Pilipinas<br><br>
                                    Hi '.$fname.',<br>
                                    Thank you for Booking!<br><br>
                                    <b>IMPORTANT REMINDERS<br><br>
                                    1. Visiting Hours for Museum</b><br>
                                    <ul><li><b>Tuesday to Sunday</b>, excluding religious holidays, with morning session from
                                    <b>8:00 AM to 12:00 NN</b>, and afternoon session from <b>1:00 PM to 4:00 PM</b></ul>
                                    <ul><li>Please bring a photo ID with you.</li></ul>
                                    <ul><li>To help you plan for your visit, here is a <a href="https://virtualshrine.online/Website/Plan.php">link </a>
                                        to the museum list of current exhibits.</li></ul><br><br>
                                    <b>2. Staying safe inside the Museum</b><br>
                                    <ul><li>A temperature scan will be taken of every visitor upon entry. Persons with a temperature of 37.5 degrees Celsius and above will not be allowed to enter. Likewise, any person with fever and flu-like symptoms will not be allowed to enter.</li></ul>
                                    <ul><li>Every individual must complete a health declaration form prior to entry to museum building. This will be facilitated as part of the online reservation process.</li></ul>
                                    <ul><li>Face mask must be worn at all times within the museum building.</li></ul>
                                    <ul><li>Visitors are allowed to bring their own sanitizing kits (small bottles of alcohol, small spray bottles, and tissue papers), but visitors must be mindful of their surroundings when using their sanitizing kits.</li></ul>
                                    <ul><li>Social distancing of at least <b>TWO (2)</b> meters between persons not belonging to the same household must be observed at all times.</li></ul><br><br>
                                    If you wish to cancel or reschedule this booking, please <a href="https://virtualshrine.online/website/ReschedCancel_details.php">click here</a></p>');// Message body
                    $mail->addAddress($to);// Target email


                    $mail->send();
                
                $_SESSION['message'] = "Booking has been Approved";
                header('Location: booking-pending.php');
                exit(0);
        }
        
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: booking-pending.php');
        exit(0);
    }

}





//EDIT POST
if(isset($_POST['post_update']))
{
    $post_id = $_POST['post_id'];

    $category_id = $_POST['category_id'];
    
    $eng_post_name =  $_POST['eng_name'];
    $eng_final_postname = ucwords($eng_post_name);
    $eng_name = $eng_final_postname;

    $fil_post_name =  $_POST['fil_name'];
    $fil_final_postname = ucwords($fil_post_name);
    $fil_name = $fil_final_postname;

    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $eng_description = mysqli_real_escape_string($con, $_POST['eng_description']);
    $fil_description = mysqli_real_escape_string($con, $_POST['fil_description']);
    $year =  mysqli_real_escape_string($con, $_POST['year']);
    $object_type =  mysqli_real_escape_string($con, $_POST['object_type']);

    $meta_title =  mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description =  mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword =  mysqli_real_escape_string($con, $_POST['meta_keyword']);


    // ENGLISH AUDIO
    $eng_audio_old_filename = $_POST['eng_old_audio'];
    $eng_audio = $_FILES['eng_audio']['name'];

    $eng_update_filename = "";
    if($eng_audio != NULL)
    {
    //rename this image
        $eng_audio_extension = pathinfo($eng_audio, PATHINFO_EXTENSION);
        $eng_filename = time().'.'.$eng_audio_extension;

        $eng_update_filename = $eng_filename;
    }
    else
    {
        $eng_update_filename = $eng_audio_old_filename;
    }

    // FILIPINO AUDIO
    $fil_audio_old_filename = $_POST['fil_old_audio'];
    $fil_audio = $_FILES['fil_audio']['name'];

    $fil_update_filename = "";
    if($fil_audio != NULL)
    {
    //rename this image
        $fil_audio_extension = pathinfo($fil_audio, PATHINFO_EXTENSION);
        $fil_filename = time().'.'.$fil_audio_extension;

        $fil_update_filename = $fil_filename;
    }
    else
    {
        $fil_update_filename = $fil_audio_old_filename;
    }
   

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



    $query = "UPDATE posts SET category_id='$category_id', eng_name='$eng_name', fil_name='$fil_name', slug='$slug', eng_description='$eng_description', fil_description='$fil_description', year='$year', object_type='$object_type', 
            image='$update_filename', eng_audio='$eng_update_filename', fil_audio='$fil_update_filename', meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', 
                    status='$status' WHERE post_id='$post_id' ";
    
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
            if($eng_audio != NULL)
            {
                if(file_exists('../uploads/audio/'.$eng_audio_old_filename)){
                    unlink("../uploads/audio/'.$eng_audio_old_filename");
                }
                move_uploaded_file($_FILES['eng_audio']['tmp_name'], '../uploads/audio/'.$eng_update_filename);
            }
            if($fil_audio != NULL)
            {
                if(file_exists('../uploads/audio/'.$fil_audio_old_filename)){
                    unlink("../uploads/audio/'.$fil_audio_old_filename");
                }
                move_uploaded_file($_FILES['fil_audio']['tmp_name'], '../uploads/audio/'.$fil_update_filename);
            }
            
                $_SESSION['message'] = "Post Updated Successfully";
                header('Location: post-edit.php?post_id='.$post_id);
                exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: post-edit.php?post_id='.$post_id);
            exit(0);
        }

}
    




//ADD POST
if(isset($_POST['post_add']) && isset($_FILES['eng_audio']) && isset($_FILES['fil_audio']))
{

    // ENGLISH AUDIO
    $english_audio_name = $_FILES['eng_audio']['name'];
    $english_tmp_name = $_FILES['eng_audio']['tmp_name'];
    $error = $_FILES['eng_audio']['error'];

    if ($error === 0) {
    	$english_audio_ex = pathinfo($english_audio_name, PATHINFO_EXTENSION);

    	$english_audio_ex_lc = strtolower($english_audio_ex);

    	$english_allowed_exs = array("mp3", '3gp', 'm4a', 'wav', 'm3u', 'ogg');

    	if (in_array($english_audio_ex_lc, $english_allowed_exs)) {
    		
    		$new_english_audio_name = uniqid("audio-", true). '.'.$english_audio_ex_lc;
    		$english_audio_upload_path = '../uploads/audio/'.$new_english_audio_name;
    		move_uploaded_file($english_tmp_name, $english_audio_upload_path);
        

    // TAGALOG AUDIO
    $filipino_audio_name = $_FILES['fil_audio']['name'];
    $filipino_tmp_name = $_FILES['fil_audio']['tmp_name'];
    $error = $_FILES['fil_audio']['error'];

    if ($error === 0) {
    	$filipino_audio_ex = pathinfo($filipino_audio_name, PATHINFO_EXTENSION);

    	$filipino_audio_ex_lc = strtolower($filipino_audio_ex);

    	$filipino_allowed_exs = array("mp3", '3gp', 'm4a', 'wav', 'm3u', 'ogg');

    	if (in_array($filipino_audio_ex_lc, $filipino_allowed_exs)) {
    		
    		$new_filipino_audio_name = uniqid("audio-", true). '.'.$filipino_audio_ex_lc;
    		$filipino_audio_upload_path = '../uploads/audio/'.$new_filipino_audio_name;
    		move_uploaded_file($filipino_tmp_name, $filipino_audio_upload_path);
        

    $category_id = $_POST['category_id'];
    
    $eng_post_name = $_POST['eng_name'];
    $eng_final_postname = ucwords($eng_post_name);
    $eng_name = $eng_final_postname;

    $fil_post_name = $_POST['fil_name'];
    $fil_final_postname = ucwords($fil_post_name);
    $fil_name = $fil_final_postname;
   
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $eng_description = mysqli_real_escape_string($con, $_POST['eng_description']);
    $fil_description = mysqli_real_escape_string($con,$_POST['fil_description']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $object_type = mysqli_real_escape_string($con, $_POST['object_type']);
    
    $meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword = mysqli_real_escape_string($con, $_POST['meta_keyword']);

    $image = $_FILES['image']['name'];
    //rename this image
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

    $status = $_POST['status'] == true ? '0':'1';

    $query = "INSERT INTO posts (category_id, eng_name, fil_name, slug, eng_description, fil_description, year, object_type, image, fil_audio, eng_audio, meta_title, meta_description, meta_keyword, status) 
    VALUES ('$category_id','$eng_name', '$fil_name', '$slug', '$eng_description', '$fil_description', '$year',  '$object_type', '$filename', '$new_filipino_audio_name', '$new_english_audio_name', '$meta_title', '$meta_description', '$meta_keyword', '$status')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            $last_id = mysqli_insert_id($con);
            if ($last_id){
                $code = rand(1,99999);
                $post_id = "CRSCOL_".$code."_".$last_id;
                $query = "UPDATE posts SET postID = '".$post_id."' WHERE post_id = '".$last_id."'";
                $res = mysqli_query($con, $query);
            }
            if ($last_id){
                $stopNo = "STOP_".$last_id;
                $query = "UPDATE posts SET stop_number = '".$stopNo."' WHERE post_id = '".$last_id."'";
                $res = mysqli_query($con, $query);
            }
            
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
        } else {
            $_SESSION['message'] = "Failed to upload data to the database";
            header('Location: post-add.php');
            exit(0);
        }
    }
}
}
}
}


//EDIT CATEGORY
if(isset($_POST['edit_category']))
{
    $category_id = $_POST['category_id'];

    $cat_name = mysqli_real_escape_string($con, $_POST['name']);
    $final_categoryname = ucwords($cat_name);
    $name = $final_categoryname;
    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;

    $description = mysqli_real_escape_string($con, $_POST['description']);
    
    $meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword = mysqli_real_escape_string($con, $_POST['meta_keyword']);

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
    $cat_name = $_POST['name'];
    $final_categoryname = ucwords($cat_name);
    $name = $final_categoryname;

    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //remove all special characters
    $final_string = preg_replace('/-+/', '-', $string);
    $slug = $final_string;
    
    $description = mysqli_real_escape_string($con, $_POST['description']);
    
    $meta_title =  mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description =  mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword =  mysqli_real_escape_string($con, $_POST['meta_keyword']);

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
                header('Location: admin-list.php');
                exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: admin-list.php');
        exit(0);
    }

}
}

// ADD ASSISTANT ADMIN
if(isset($_POST['add_admin']))
{

    $firstname = mysqli_real_escape_string($con, $_POST['fname']);
    $lower_fname = strtolower($firstname);
    $final_firstname = ucwords($lower_fname);
    $fname = $final_firstname;
        
    $lastname = mysqli_real_escape_string($con, $_POST['lname']);
    $lower_lname = strtolower($lastname);
    $final_lastname = ucwords($lower_lname);
    $lname = $final_lastname;

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $role_as = $_POST['role_as'];
    $image = $_FILES["../uploads/user/default_pfp.jpeg"];
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
            $_SESSION['message'] = "Username already exists";
            header("Location: assistant-admin-add.php");
            exit(0);
        }
        else
        {
            $user_query = "INSERT INTO users (fname, lname, username, email, role_as, password, profileImage) VALUES ('$fname', '$lname', '$username', '$email', '$role_as', '$password', '$image')";
            $user_query_run = mysqli_query($con, $user_query);

                if($user_query_run)
                {
                    $last_id = mysqli_insert_id($con);
                    if ($last_id){
                        $code = rand(1,99999);
                        $user_id = "CRSA_".$code."_".$last_id;
                        $query = "UPDATE users SET user_id = '".$user_id."' WHERE id = '".$last_id."'";
                        $res = mysqli_query($con, $query);
                    }

                    $sql="INSERT INTO auditlog (id, username, action) VALUES ('AUTO_INCREMENT', '".$_SESSION['auth_user']['user_name']."', 'Added a New Admin')";
                    $sql_run = mysqli_query($con, $sql);
                    if($sql_run)
                    {
                        $_SESSION['message'] = "New User Added Succesfully";
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
        $password = $_POST['password'];
        $confirm_password = $_POST['cpassword'];
        $status = $_POST['status'] == true ? '0':'1';

    if($password == $confirm_password)
    {
        //Check username
        $checkusername = "SELECT username FROM users WHERE username='$username' AND id!='$user_id'";
        $checkusername_run = mysqli_query($con, $checkusername);

        if(mysqli_num_rows($checkusername_run) > 0)
        {
            //Username already exists
            $_SESSION['message'] = "Username already exists";
            header('Location: assistant-admin-edit.php?id='.$user_id);
            exit(0);
        }
        else
        {

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
}
else
{
$_SESSION['message'] = "Password does not match";
header('Location: assistant-admin-edit.php?id='.$user_id);
exit(0);
}

}


?>