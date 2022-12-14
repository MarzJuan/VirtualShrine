<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
    <h4 class="mt-4"></h4>

    <div class="container-fluid px-4">
    <h4 class="mt-4">Gallery Category</h4>
    <ol class="breadcrumb mb-4">
    <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Category</li>                                                                                           
    </ol>

    <div class="row mt-4">
        <div class="col-md-12">

        <?php include('message.php'); ?>
        
            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="category-add.php" class="btn btn-primary float-end">Add Gallery</a>
                    </h4>
                </div>
                <div class="card-body">

                

                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered table-stripe">
                        <thead>
                            <tr>
                                <th><center>ID</center></th>
                                <th><center>Name</center></th>
                                <th><center>Status</center></th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                            $category = "SELECT * FROM categories WHERE status!='2'";
                            $category_run = mysqli_query($con, $category);

                            if(mysqli_num_rows($category_run) > 0)
                            {
                                foreach($category_run as $item)
                                {
                                ?>
                                <tr>
                                    <td><?=$item['id'] ?></td>
                                    <td><?=$item['name'] ?></td>
                                    <td>

                                    <?php

                                                if($item['status'] ==0)
                                                {
                                                    echo '<span style="color:GREEN;text-align:center;">Active</span>';
                                                }
                                                if($item['status'] ==1)
                                                {
                                                    echo '<span style="color:Blue;text-align:center;">Hidden</span>';
                                                }
                                                if($item['status'] ==2)
                                                {
                                                    echo '<span style="color:RED;text-align:center;">Archived</span>';
                                                }


                                    ?>

                                    
                                    </td>
                                    <td><center>
                                    
                                        <form action="code-superAdmin.php" method = "POST">
                                        <a href="category-edit.php?id=<?=$item['id']?>" class="btn btn-info" title="Edit"><i class='bx bx-edit'></i></a>
                                    
                                        <?php if($_SESSION['auth_role'] == '0') : ?>
                                        <button type="submit" name="category_archive" value="<?=$item['id'] ?>" class="btn btn-danger" title="Archive"><i class='bx bx-archive-in' ></i></a>
                                        </form>
                                        <?php endif; ?>
                                        </center>
                                    </td>
                                </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>
                                        <td colspan="5">No Record Found</td>
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

        </div>
</main>

<?php
include('includes/footer.php');
include('includes/script.php');
?>