<?php
include('config/dbcon.php');

//CANCEL BOOKING
if(isset($_POST['cancelBook']))
{
    $booking_id = $_POST['booking_id'];
    $query = "UPDATE bookings SET status='4' WHERE booking_id='$booking_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
        {
            header('Location: cancel-success.php');
            exit(0);
        }
}


//BOOKING RESCHEDULE
if(isset($_POST['new_sched']))
{
    $booking_id = $_POST['booking_id'];
    $date_visit = $_POST['date_visit'];
    $time_visit = $_POST['time_visit'];

    $query = "UPDATE bookings SET status='3', date_visit='$date_visit', time_visit='$time_visit' WHERE booking_id='$booking_id'";
    $query_run = mysqli_query($con, $query);

    
    if($query_run)
        {
            header('Location: resched_processing.php');
            exit(0);
        }
}


//BOOKING RESCHEDULE AND CANCEL
if(isset($_POST['submit_id']))
{
    $booking_id = $_POST['booking_id'];

    $query = "SELECT * FROM bookings";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header('Location: ReschedCancel_details.php?id='.$booking_id);
        exit(0);
    }
    else
    {
        header('Location: resched-cancel.php?id='.$booking_id);
        exit(0);
    }
}

//BOOKING
if(isset($_POST['submit_booking']))
{

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];

    $accept = ["jpg", "png", "gif", "webp"]; //restricts the file type
    $image_extension = strtolower(pathinfo($_FILES['id_image']['name'], PATHINFO_EXTENSION));
    $filename = time().'.'.$image_extension;

    $org_name =  $_POST['org_name'];
    $date_visit =  $_POST['date_visit'];
    $time_visit = $_POST['time_visit'];
    $no_visitors = $_POST['no_visitors'];

    $query = "INSERT INTO bookings(fname, lname, phone_no, email, id_image, org_name, date_visit, time_visit, no_visitors) VALUES
            ('$fname', '$lname', '$phone_no', '$email', '$filename', '$org_name', '$date_visit', '$time_visit', '$no_visitors')";
    $query_run = mysqli_query($con, $query);

    if($query_run && in_array($image_extension, $accept))
    {
        $last_id = mysqli_insert_id($con);
        if ($last_id){
            $code = rand(1,99999);
            $year = date('Y');
            $booking_id = $year."CRSB_".$code."_".$last_id;
            $query = "UPDATE bookings SET bookingID = '".$user_id."' WHERE id = '".$last_id."'";
            $res = mysqli_query($con, $query);
        }

        move_uploaded_file($_FILES['id_image']['tmp_name'], 'Images/visitor_attachment/'.$filename);
        header('Location: booking-processing.php');
        exit(0);
    }

}

/*if (isset($_POST['submit_booking']) && isset($_FILES['id_image'])) 
{

    $image_name = $_FILES['id_image']['name'];
    $tmp_name = $_FILES['id_image']['tmp_name'];
    $error = $_FILES['id_image']['error'];

    if ($error === 0)
    {
    	$image_ex = pathinfo($image_name, PATHINFO_EXTENSION);

    	$image_ex_lc = strtolower($image_ex);

    	$allowed_exs = array("jpeg", 'jpg', 'pdf', 'svg', 'png');

    	if (in_array($image_ex_lc, $allowed_exs)) {
    		
    		$new_image_name = uniqid("attached-", true). '.'.$image_ex_lc;
    		$image_upload_path = '../Images/visitor_attachment/'.$new_image_name;
    		move_uploaded_file($tmp_name, $image_upload_path);

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone_no = $_POST['phone_no'];
        $email = $_POST['email'];
        $org_name =  $_POST['org_name'];
        $date_visit =  $_POST['date_visit'];
        $time_visit = $_POST['time_visit'];
        $no_visitors = $_POST['no_visitors'];

    $query = "INSERT INTO bookings(fname, lname, phone_no, email, id_image, org_name, date_visit, time_visit, no_visitors) VALUES
            ('$fname', '$lname', '$phone_no', '$email', '$new_image_name', '$org_name', '$date_visit', '$time_visit', '$no_visitors')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header('Location: booking-processing.php');
        exit(0);
    }

}
    }
}*/



?>