<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
    <h4 class="mt-4"></h4>

    <div class="container-fluid px-4">
    <h4 class="mt-4">Blog</h4>
    <ol class="breadcrumb mb-4">
        <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Blog</li>                                                                                           
    </ol>

    <div class="row mt-4">
        <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card shadow mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="blog-add.php" class="btn btn-primary float-end">Create Blog</a>
                    </h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
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
                                    
                                    $blogs = "SELECT * FROM blog WHERE status ='0'"; // 0 = ACTIVE
                                    $blogs_run = mysqli_query($con, $blogs);


                                    if(mysqli_num_rows($blogs_run) > 0)
                                    {
                                        foreach($blogs_run as $blogs)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $blogs['blogID']?></td>
                                                <td><?= $blogs['name']?></td>
                                                <td><img src="../uploads/blog/<?= $blogs['image']?>" width="60px" height="60px" /></td>
                                                
                                                <td>
                                            <?php

                                                if($blogs['status'] ==0)
                                                {
                                                    echo '<span style="color:GREEN;text-align:center;">Active</span>';
                                                }
                                                if($blogs['status'] ==1)
                                                {
                                                    echo '<span style="color:Blue;text-align:center;">Hidden</span>';
                                                }
                                                if($blogs['status'] ==2)
                                                {
                                                    echo '<span style="color:RED;text-align:center;">Archived</span>';
                                                }


                                            ?>

                                                <td><center>
                                                    <form action="code-superAdmin.php" method = "POST">
                                                    <a href="blog-edit.php?blog_id=<?= $blogs['blog_id']?>" class="btn btn-success" title="Edit"><i class='bx bx-edit'></i></a>
                                                
                                                    <?php if($_SESSION['auth_role'] == '0') : ?>
                                                    <button type="submit" name="post_archive" value="<?=$blogs['blog_id'] ?>" class="btn btn-danger" title="Archive"><i class='bx bx-archive-in' ></i></a>
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