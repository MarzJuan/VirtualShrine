<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">
    <h4 class="mt-4"></h4>

    <div class="row mt-4">
        <div class="col-md-12">

        <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Edit Exhibit Display
                        <a href="exhibit-display-view.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="code.php" method="POST" enctype='multipart/form-data'>
                <?php
                    if(isset($_GET['display_id']))
                    {
                        $display_id = $_GET['display_id'];
                        $post_query = "SELECT * FROM exhibit_display WHERE display_id='$display_id' LIMIT 1";
                        $post_query_res = mysqli_query($con, $post_query);

                        if(mysqli_num_rows($post_query_res) > 0)
                        {
                            $post_row = mysqli_fetch_array($post_query_res);
                            ?>
                        

                <input type="hidden" name="display_id" value="<?= $post_row['display_id'] ?>">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Gallery list</label>
                            <?php
                            $exhibit = "SELECT * FROM exhibit WHERE status='0' ";
                            $exhibit_run = mysqli_query($con, $exhibit);

                            if(mysqli_num_rows($exhibit_run) > 0)
                            {
                            ?>
                                <select name="exhibit_id" required class="form-control">
                                    <option value="">-- Select Gallery --</option>
                                    <?php
                                    foreach($exhibit_run as $exhibititem)
                                        {
                                        ?>
                                        <option value="<?= $exhibititem['exhibit_id']?>" <?= $exhibititem['exhibit_id'] == $post_row['exhibit_id'] ? 'selected':'' ?>>
                                        <?= $exhibititem['name']?>
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
                                <label for="">Name</label>
                                <input type="text" name="name" value="<?= $post_row['name'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL)</label>
                                <input type="text" name="slug" value="<?= $post_row['slug'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" required class="form-control summernote" rows="4"><?= $post_row['description'] ?></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Year</label>
                                <input type="text" name="year" value="<?= $post_row['year'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Type of Object</label>
                                <input type="text" name="object_type" value="<?= $post_row['object_type'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" value="<?= $post_row['meta_title'] ?>" max="200" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" required class="form-control" rows="4"><?= $post_row['meta_description'] ?></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea name="meta_keyword" required class="form-control" rows="4"><?= $post_row['meta_keyword'] ?></textarea>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="">Image</label>
                                <input type="hidden" name="old_image" value="<?= $post_row['image'] ?>" />
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="">Status - <i>Check the box to set status as active</label> <br/>
                                <input type="checkbox" name="status" <?= $post_row['status'] == '0' ? 'checked':'' ?> width="70px" height="70px" />
                            </div>

                            <div class="com-md-6 mb-3">
                                <button type="submit" name="exdis_update" class="btn btn-primary">Update</button>
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
</main>


<?php
include('includes/footer.php');
include('includes/script.php');
?>