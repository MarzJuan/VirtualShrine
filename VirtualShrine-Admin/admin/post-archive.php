<?php
session_start();
include('config/dbcon.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
<h4 class="mt-4">Archived Gallery Content</h4>
    <ol class="breadcrumb mb-4">
    <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Archived Gallery Content</li>                                                                                           
    </ol>

    <div class="row">
    <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card shadow">
                <div class="card-header">
                <h4>Archived Gallery Content</h4>
                </div>
                <div class="card-body">

                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                        <th><center>ID</center></th>
                        <th><center>Name</center></th>
                        <th><center>Image</center></th>
                        <th><center>Status</center></th>
                        <th><center>Action</center></th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM posts WHERE status='2'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $posts)
                                {
                                    ?>
                                    <tr>
                                    <td><?=$posts['id'] ?></td>
                                    <td><?=$posts['name'] ?></td>
                                    <td><img src="../uploads/posts/<?= $posts['image']?>" width="60px" height="60px" /></td>
                                    <td>

                                    <?php

                                                if($posts['status'] ==0)
                                                {
                                                    echo "Active";
                                                }
                                                if($posts['status'] ==1)
                                                {
                                                    echo "Hidden";
                                                }
                                                if($posts['status'] ==2)
                                                {
                                                    echo '<span style="color:RED;text-align:center;">Archived</span>';
                                                }


                                    ?>
                                    </td>
                                        <td>
                                            <form action="code-superAdmin.php" method="POST">
                                            <center><button type="submit" name="assistant-admin-recover" value="<?=$row['id'];?>" class="btn btn-success">Recover</button></center>
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