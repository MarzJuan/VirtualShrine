<?php

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
            $query = "UPDATE bookings SET bookingID = '".$booking_id."' WHERE booking_id = '".$last_id."'";
            $res = mysqli_query($con, $query);
        }

        move_uploaded_file($_FILES['id_image']['tmp_name'], 'Images/visitor_attachment/'.$filename);
        header('Location: booking-processing.php');
        exit(0);
    }

}

?>