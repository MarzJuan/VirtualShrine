<?php
session_start();
include('config/dbcon.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4"></h4>

    <div class="container-fluid px-4">
    <h4 class="mt-4">Audio Guide</h4>
    <ol class="breadcrumb mb-4">
        <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Audio Guide Contents</li>                                                                                           
    </ol>

    <div class="row mt-4">
        <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card shadow mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Audio List
                        <a href="audio-add.php" class="btn btn-primary float-end">Add Audio</a>
                    </h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><center>Audio ID</center></th>
                                    <th><center>Title</center></th>
                                    <th><center>Category</center></th>
                                    <th><center>Audio File</center></th>
                                    <th><center>Status</center></th>
                                    <th><center>Action</center></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    $audio = "SELECT a.*, c.name AS cname FROM audio a,categories c WHERE c.id = a.category_id AND a.status!='2'";
                                    $audio_run = mysqli_query($con, $audio);

                                    //$audio = "SELECT * FROM audio WHERE status!='2'";
                                    //$audio_run = mysqli_query($con, $audio);



                                    if(mysqli_num_rows($audio_run) > 0)
                                    {
                                        foreach($audio_run as $audio)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $audio['audio_id']?></td>
                                                <td><?= $audio['title']?></td>
                                                <td><?= $audio['cname']?></td>
                                                <td>
                                                    <?php
                                                    $audio['audio']
                                                        ?>
                                                                
                                                           <audio src="../uploads/audio/<?=$audio['audio']?>" 
                                                                  controls>
                                                               
                                                            </audio>
                                               
                                                            <?php 
                                                            
                                                            
                                                            ?>
                                                </td>
                                                
                                                <td>
                                            <?php

                                                if($audio['status'] ==0)
                                                {
                                                    echo '<span style="color:GREEN;text-align:center;">Active</span>';
                                                }
                                                if($audio['status'] ==1)
                                                {
                                                    echo '<span style="color:Blue;text-align:center;">Hidden</span>';
                                                }

                                            ?>

                                                <td><center>
                                                    <form action="code-superAdmin.php" method = "POST">
                                                    <a href="audio-edit.php?audio_id=<?= $audio['audio_id']?>" class="btn btn-success">Edit</a>
                                                
                                                    <?php if($_SESSION['auth_role'] == '0') : ?>
                                                    <button type="submit" name="audio_archive" value="<?=$audio['audio_id'] ?>" class="btn btn-danger">Archive</a>
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

<?php
include('includes/footer.php');
include('includes/script.php');
?>