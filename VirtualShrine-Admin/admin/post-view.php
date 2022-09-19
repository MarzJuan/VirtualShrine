<?php
session_start();
include('config/dbcon.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4"></h4>

    <div class="row mt-4">
        <div class="col-md-12">
        <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>View Post
                        <a href="post-add.php" class="btn btn-primary float-end">Add Post</a>
                    </h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
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
                                                <td><?= $posts['id']?></td>
                                                <td><?= $posts['name']?></td>
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
                                                    <form action="code.php" method = "POST">
                                                    <a href="post-edit.php?id=<?= $posts['id']?>" class="btn btn-success">Edit</a>
                                                
                                                    
                                                    <button type="submit" name="post_archive" value="<?=$posts['id'] ?>" class="btn btn-danger">Archive</a>
                                                    </form>
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

<?php
include('includes/footer.php');
include('includes/script.php');
?>