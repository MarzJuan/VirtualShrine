<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
    <h4 class="mt-4"></h4>

    <div class="container-fluid px-4">
    <h4 class="mt-4">Collection</h4>
    <ol class="breadcrumb mb-4">
        <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Gallery Contents</li>                                                                                           
    </ol>

    <div class="row mt-4">
        <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card shadow mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="post-add.php" class="btn btn-primary float-end">Add Content</a>
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
                                    
                                    $posts = "SELECT p.*, c.name AS cname FROM posts p,categories c WHERE c.id = p.category_id AND p.status!='2'";
                                    $posts_run = mysqli_query($con, $posts);

                                    //$posts = "SELECT * FROM posts WHERE status!='1' ";
                                   // $posts_run = mysqli_query($con, $posts);


                                    if(mysqli_num_rows($posts_run) > 0)
                                    {
                                        foreach($posts_run as $posts)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $posts['postID']?></td>
                                                <td><?= $posts['fil_name']?></td>
                                                <td><?= $posts['cname']?></td>
                                                <td><img src="../uploads/posts/<?= $posts['image']?>" width="60px" height="60px" /></td>
                                                
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
                                                    <a href="post-edit.php?post_id=<?= $posts['post_id']?>" class="btn btn-success"><i class='bx bx-edit'></i></a>
                                                
                                                    <?php if($_SESSION['auth_role'] == '0') : ?>
                                                    <button type="submit" name="post_archive" value="<?=$posts['post_id'] ?>" class="btn btn-danger"><i class='bx bx-archive-in' ></i></a>
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