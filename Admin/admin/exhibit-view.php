<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
    <h4 class="mt-4"></h4>

    <div class="container-fluid px-4">
    <h4 class="mt-4">Exhibits</h4>
    <ol class="breadcrumb mb-4">
    <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Exhibit</li>                                                                                           
    </ol>

    <div class="row mt-4">
        <div class="col-md-12">

        <?php include('message.php'); ?>
        
            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="exhibit-add.php" class="btn btn-primary float-end">Add Exhibit</a>
                    </h4>
                </div>
                <div class="card-body">

                

                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered table-stripe">
                        <thead>
                            <tr>
                                <th><center>ID</center></th>
                                <th><center>Name</center></th>
                                <th><center>Duration</center></th>
                                <th><center>Status</center></th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                            $exhibits = "SELECT * FROM exhibit WHERE status!='2'";
                            $exhibit_run = mysqli_query($con, $exhibits);

                            if(mysqli_num_rows($exhibit_run) > 0)
                            {
                                foreach($exhibit_run as $exhibit)
                                {
                                ?>
                                <tr>
                                    <td><?=$exhibit['exhibitID'] ?></td>
                                    <td><?=$exhibit['name'] ?></td>

                                    <?php $date = strtotime($exhibit['start_date']);?>
                                    <?php $enddate = strtotime($exhibit['end_date']);?>
                                    <td class="created_at">
                                    <?php
                                        echo date('M d', $date)." to ".date('M d', $enddate);
                                    ?>
                                    </td>
                                    <td>
                                    <?php

                                                if($exhibit['status'] ==0)
                                                {
                                                    echo '<span style="color:GREEN;text-align:center;">Active</span>';
                                                }
                                                if($exhibit['status'] ==1)
                                                {
                                                    echo '<span style="color:Blue;text-align:center;">Hidden</span>';
                                                }
                                                if($exhibit['status'] ==2)
                                                {
                                                    echo '<span style="color:RED;text-align:center;">Archived</span>';
                                                }


                                    ?>

                                    
                                    </td>
                                    <td><center>
                                    
                                        <form action="code-superAdmin.php" method = "POST">
                                        <a href="exhibit-edit.php?exhibit_id=<?=$exhibit['exhibit_id']?>" class="btn btn-info"><i class='bx bx-edit'></i></a>
                                    
                                        <?php if($_SESSION['auth_role'] == '0') : ?>
                                        <button type="submit" name="exhibit_archive" value="<?=$exhibit['exhibit_id'] ?>" class="btn btn-danger"><i class='bx bx-archive-in' ></i></a>
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