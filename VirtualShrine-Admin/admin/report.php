<?php
include('authentication.php');
include('middleware/superadminAuth.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">User Report</h4>
    <ol class="breadcrumb mb-4">
    <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Users</li>
    </ol>

    <div class="row">
        <div class="col-md-12">

        <?php include('message.php'); ?>
        
            <div class="card">
                <div class="card-header">
                    <h4>Activity Report
                    <a href="assistant-admin-list.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><center>ID</center></th>
                                    <th><center>Name</center></th>
                                    <th><center>Action Made</center></th>
                                    <th><center>Date Created</center></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php

                            $log = "SELECT * FROM auditlog";
                                    $log_run = mysqli_query($con, $log);

                                    //$posts = "SELECT * FROM posts WHERE status!='1' ";
                                   // $posts_run = mysqli_query($con, $posts);


                                    if(mysqli_num_rows($log_run) > 0)
                                    {
                                        foreach($log_run as $log)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $log['id']?></td>
                                                <td><?= $log['username']?></td>
                                                <td><?= $log['action']?></td>
                                                <td><?= $log['created_at']?></td>
                                            <?php
                                        }
                                    }
                                        
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>

    </div>


<?php
include('includes/footer.php');
include('includes/script.php');
?>