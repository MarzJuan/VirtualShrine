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
                    <h4>Edit Audio
                        <a href="audio-view.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                <?php
                    if(isset($_GET['audio_id']))
                    {
                        $audio_id = $_GET['audio_id'];
                        $post_query = "SELECT * FROM audio WHERE audio_id='$audio_id' LIMIT 1";
                        $post_query_res = mysqli_query($con, $post_query);

                        if(mysqli_num_rows($post_query_res) > 0)
                        {
                            $audio_row = mysqli_fetch_array($post_query_res);
                            ?>
                        
                <form action="code.php" method="POST" enctype='multipart/form-data'>

                <input type="hidden" name="audio_id" value="<?= $audio_row['audio_id'] ?>">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Gallery list</label>
                            <?php
                            $category = "SELECT * FROM categories WHERE status='0' ";
                            $category_run = mysqli_query($con, $category);

                            if(mysqli_num_rows($category_run) > 0)
                            {
                            ?>
                                <select name="category_id" required class="form-control">
                                    <option value="">-- Select Gallery --</option>
                                    <?php
                                    foreach($category_run as $categoryitem)
                                        {
                                        ?>
                                        <option value="<?= $categoryitem['id']?>" <?= $categoryitem['id'] == $audio_row['category_id'] ? 'selected':'' ?>>
                                        <?= $categoryitem['name']?>
                                    </option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h5>No Category Available</h5>
                                <?php
                            }


                            ?>
                            
                        </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Title</label>
                                <input type="text" name="name" value="<?= $audio_row['title'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Audio File</label>
                                <input type="hidden" name="old_audio" value="<?= $audio_row['audio'] ?>" />
                                <input type="file" name="audio" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status - <i>Check the box to set status as active</label> <br/>
                                <input type="checkbox" name="status" <?= $audio_row['status'] == '0' ? 'checked':'' ?> width="70px" height="70px" />
                            </div>

                            <div class="com-md-6 mb-3">
                                <button type="submit" name="audio_update" class="btn btn-primary">Update</button>
                            </div>


                        </div>
                </form>

                    <?php
                        }
                        else
                        {
                            ?>
                                <h4>No Record Found</h4>
                            <?php
                        }
                    }
                ?>

                </div>
            </div>
        </div>

    </div>

<?php
include('includes/footer.php');
include('includes/script.php');
?>