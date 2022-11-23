<?php
include('../authentication.php');

$sql = "UPDATE bookings SET notif_status='1'";
$res = mysqli_query($con, $sql);

if ($res) {
    echo "Success";
}
else
{
    echo "Failed";
}
?>