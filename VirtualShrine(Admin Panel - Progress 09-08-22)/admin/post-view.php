<?php
session_start();
include('config/dbcon.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4"></h4>

    <div class="row mt-4">
        <div class="col-md-12">

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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Archive</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //$posts = "SELECT * FROM posts WHERE STATUS!='2' ";
                                    $posts = "SELECT p.*, c.name AS cname FROM posts p,categories c WHERE c.id = p.category_id ";
                                    $posts_run = mysqli_query($con, $posts);

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
                                                    
                                                    <?= $posts['status'] == '1' ? 'Hidden':'visible'?>
                                                </td>
                                                <td>
                                                    <a href="post-edit.php?id=<?= $posts['id']?>" class="btn btn-success">Edit</a>
                                                </td>
                                                <td>
                                                    <button type="submit" name="post_archive" value="<?=$item['id'] ?>" class="btn btn-danger">Archive</a>
                                                </td>
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