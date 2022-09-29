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
                <h4>Archived Audio</h4>
                </div>
                <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Audio</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM audio WHERE status='2'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $audio)
                                {
                                    ?>
                                    <tr>
                                    <td><?=$audio['audio_id'] ?></td>
                                    <td><?=$audio['title'] ?></td>
                                    <td><?= $audio['audio']?></td>
                                    <td>

                                    <?php

                                                if($audio['status'] ==0)
                                                {
                                                    echo "Active";
                                                }
                                                if($audio['status'] ==1)
                                                {
                                                    echo "Hidden";
                                                }
                                                if($audio['status'] ==2)
                                                {
                                                    echo '<span style="color:RED;text-align:center;">Archived</span>';
                                                }


                                    ?>
                                    </td>
                                        <td>
                                            <form action="code-superAdmin.php" method="POST">
                                                <button type="submit" name="audio_recover" value="<?=$audio['audio_id'] ?>" class="btn btn-success">Recover</button>
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