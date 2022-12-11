<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
<h4 class="mt-4">Archived Assistant Admin</h4>
    <ol class="breadcrumb mb-4">
    <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Archived Assistant Admin</li>                                                                                           
    </ol>

    <div class="row">
    <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card shadow">
                <div class="card-header">
                <h4>Archived Assistant Admin</h4>
                </div>
                <div class="card-body">

                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>Name</center></th>
                            <th><center>Username</center></th>
                            <th><center>Status</center></th>
                            <th><center>Action</center></th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM users WHERE status='2'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['fname'].' '.$row['lname']; ?></td>
                                        <td><?= $row['username']; ?></td>
                                        <td>
                                        <?php
                                            if($row['status'] == 0){
                                                echo '<span style="color:GREEN;text-align:center;">Active</span>';
                                            }
                                            else if($row['status'] == 2){
                                                echo '<span style="color:RED;text-align:center;">Archived</span>';
                                            }

                                            ?>
                                        </td>
                                        <td>
                                            <form action="code-superAdmin.php" method="POST">
                                            <center><button type="submit" name="user-recover" value="<?=$row['id'];?>" class="btn btn-success">Recover</button></center>
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
</main>

<?php
include('includes/footer.php');
include('includes/script.php');
?>