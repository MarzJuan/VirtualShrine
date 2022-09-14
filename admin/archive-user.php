<?php
session_start();
include('config/dbcon.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4"> </h4>

    <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                <h4>Archived Users</h4>
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
                            <th>Archive</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM user_archive";
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
                                            if($row['status'] == 0){
                                                echo 'Active';
                                            }
                                            else if($row['status'] == 1){
                                                echo 'Inactive';
                                            }

                                            ?>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="assistant-admin-recover" value="<?=$row['id'];?>" class="btn btn-success">Recover</button>
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