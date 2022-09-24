<?php
session_start();
include('config/dbcon.php');
include('includes/header.php');
?>


<?php include('message.php'); ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    
        <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">No. of Admins
                <?php
                    $dash_users_query = "SELECT * FROM users";
                    $dash_users_query_run = mysqli_query($con, $dash_users_query);

                    if($user_total = mysqli_num_rows($dash_users_query_run))
                    {
                        echo '<h4 class=""mb-0>'.$user_total.'</h4>';
                    }
                    else
                    {
                        echo '<h4 class=""mb-0>No Data</h4>';
                    }

                ?>
                
                </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="assistant-admin-list.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Bookings
                <?php
                    $dash_bookings_query = "SELECT * FROM bookings";
                    $dash_bookings_query_run = mysqli_query($con, $dash_bookings_query);

                    if($bookings_total = mysqli_num_rows($dash_bookings_query_run))
                    {
                        echo '<h4 class=""mb-0>'.$bookings_total.'</h4>';
                    }
                    else
                    {
                        echo '<h4 class=""mb-0>No Data</h4>';
                    }

                ?>
                </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="booking-pending.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Page Views</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <!-- Only the Assistant Admin will be able to see this card-->
    <?php if($_SESSION['auth_role'] == '1') : ?>
    <div class="container-fluid px-4">
    <h4 class="mt-4"></h4>

    <div class="row mt-4">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4>Pending Booking</h4>
                </div>
                <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>Name</center></th>
                            <th><center>Date of Visit</center></th>
                            <th><center>No. of Visitors</center></th>
                            
                        </tr>
                    </thead>
                

                <tbody>
                            <?php
                            $query = "SELECT * FROM bookings";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $bookings)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $bookings['booking_id']; ?></td>
                                        <td><?= $bookings['fname']. " " . $bookings["lname"]; ?></td>
                                        <td><?= $bookings['date_visit']; ?></td>
                                        <td><?= $bookings['no_visitors']; ?></td>
                                
                                    </tr>
                            <?php
                            }
                        }
                            ?>
                            

                            
                </tbody>

                
                </table>
                <td>
                    <a href="booking-pending.php">View Details</a>
                </td>
                <?php endif; ?>
                <!-- end -->

                
    

    <!-- Only the Head Admin will be able to see this card-->
    <?php if($_SESSION['auth_role'] == '0') : ?>
    <div class="container-fluid px-4">
    <h4 class="mt-4"></h4>

    <div class="row mt-4">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4>Users</h4>
                </div>
                <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>Name</center></th>
                            <th><center>username</center></th>
                            <th><center>status</center></th>
                            
                        </tr>
                    </thead>
                

                    <tbody>
                            <?php
                            $query = "SELECT * FROM users WHERE role_as=1"; //role_as 1 is to retrieve assistant admin data from the database
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['fname']. " " .$row['lname']; ?></td>
                                        <td><?= $row['username']; ?></td>

                                        <td>
                                            <?php
                                            if($row['status'] == 1){
                                                echo 'Active';
                                            }
                                            elseif($row['status'] == 0){
                                                echo 'Inactive';
                                            }

                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                            }
                        }
                            ?>
                        </tbody>

                
                </table>
                <td>
                    <a href="assistant-admin-list.php">View Details</a>
                </td>
                <?php endif; ?>
            <!-- End -->
               

<?php
include('includes/footer.php');
include('includes/script.php');
?>