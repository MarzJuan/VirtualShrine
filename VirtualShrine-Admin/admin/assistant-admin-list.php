<?php
session_start();
include('config/dbcon.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Assistant Admin</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>                                                                                           
    </ol>

    <div class="row">

        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6> Assistant Admin List
                <a href="assistant-admin-add.php" class="btn btn-primary float-end">Add User</a>
                </h6>
                    
                </div>
                <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>Name</center></th>
                            <th><center>username</center></th>
                            <th><center>status</center></th>
                            <?php if($_SESSION['auth_role'] == '0') : ?> <!-- Only the Head Admin will be able to see this-->
                            <th><center>Action</center></th>
                            <?php endif; ?>
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
                                        
                                        <!-- Only the Head Admin will be able to see this-->
                                        <td><center>
                                        <?php if($_SESSION['auth_role'] == '0') : ?>

                                            <form action="code.php" method="POST">
                                            <a href= "assistant-admin-edit.php?id=<?=$row['id'];?>" class="btn btn-success">Edit</a>
                                            
                                            <button type="submit" name="assistant-admin-archive" value="<?=$row['id'];?>" class="btn btn-danger">Archive</button>
                                            </form>
                                            
                                            <?php endif; ?>
                                        <!-- end -->
                                        </center></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                            ?>
                                <tr>
                                    <td colspan = "6">No Record Found</td>
                                </tr>
                            <?php
                            }
                            ?>
                            
                        </tbody>
                </table>


                </div>
            </div>
        </div>

    </div>

<?php
include('includes/footer.php');
include('includes/script.php');
?>