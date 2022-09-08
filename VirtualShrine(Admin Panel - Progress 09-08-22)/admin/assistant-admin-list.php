<?php
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
            <div class="card">
                <div class="card-header">
                <h6> Assistant Admin List
                </h6>
                    
                </div>
                <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>username</th>
                            <th>status</th>
                            <th>Edit</th>
                            <th>Archive</th>
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
                                        <td><?= $row['fname']; ?></td>
                                        <td><?= $row['lname']; ?></td>
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
                                        <td><a href= "assistant-admin-edit.php?id=<?=$row['id'];?>" class="btn btn-success">Edit</td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="assistant-admin-archive" value="<?=$row['id'];?>" class="btn btn-danger">Archive</button>
                                            </form>
                                        </td>
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