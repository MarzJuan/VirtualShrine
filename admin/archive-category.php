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
                <h4>Archived Category</h4>
                </div>
                <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Recover</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM categories WHERE status!='0'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $item)
                                {
                                    ?>
                                    <tr>
                                    <td><?=$item['id'] ?></td>
                                    <td><?=$item['name'] ?></td>
                                    <td>

                                    <?= $item['status'] == '0' ? 'visible' : 'hidden'?>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <button type="submit" name="archive_recover" value="<?=$item['id'] ?>" class="btn btn-success">Recover</button>
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