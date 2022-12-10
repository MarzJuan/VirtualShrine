<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
    <h4 class="mt-4"></h4>

    <div class="container-fluid px-4">
    <h4 class="mt-4">Exhibit Display</h4>
    <ol class="breadcrumb mb-4">
        <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Exhibit Display</li>                                                                                           
    </ol>

    <div class="row mt-4">
        <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card shadow mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="exhibit-display-add.php" class="btn btn-primary float-end">Add Display</a>
                    </h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><center>ID</center></th>
                                    <th><center>Name</center></th>
                                    <th><center>Category</center></th>
                                    <th><center>Image</center></th>
                                    <th><center>Status</center></th>
                                    <th><center>Action</center></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    $posts = "SELECT d.*, e.name AS ename FROM exhibit_display d,exhibit e WHERE e.exhibit_id = d.exhibit_id AND d.status!='2'";
                                    $posts_run = mysqli_query($con, $posts);

                                    //$posts = "SELECT * FROM posts WHERE status!='1' ";
                                   // $posts_run = mysqli_query($con, $posts);


                                    if(mysqli_num_rows($posts_run) > 0)
                                    {
                                        foreach($posts_run as $posts)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $posts['displayID']?></td>
                                                <td><?= $posts['name']?></td>
                                                <td><?= $posts['ename']?></td>
                                                <td><img src="../uploads/exhibit/image/<?= $posts['image']?>" width="60px" height="60px" /></td>
                                                
                                                <td>
                                            <?php

                                                if($posts['status'] ==0)
                                                {
                                                    echo '<span style="color:GREEN;text-align:center;">Active</span>';
                                                }
                                                if($posts['status'] ==1)
                                                {
                                                    echo '<span style="color:Blue;text-align:center;">Hidden</span>';
                                                }
                                                if($posts['status'] ==2)
                                                {
                                                    echo '<span style="color:RED;text-align:center;">Archived</span>';
                                                }


                                            ?>

                                                <td><center>
                                                    <form action="code-superAdmin.php" method = "POST">
                                                    <a href="exhibit-display-edit.php?display_id=<?= $posts['display_id']?>" class="btn btn-success" title="Edit"><i class='bx bx-edit'></i></a>
                                                
                                                    <?php if($_SESSION['auth_role'] == '0') : ?>
                                                    <button type="submit" name="display_archive" value="<?=$posts['display_id'] ?>" class="btn btn-danger" title="Archive"><i class='bx bx-archive-in' ></i></a>
                                                    </form>
                                                    <?php endif; ?>
                                                </center></td>
                                            
                                            </tr>

                                            
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="6">No Record Found</td>
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

    </div>
</main>

<?php
include('includes/footer.php');
include('includes/script.php');
?>