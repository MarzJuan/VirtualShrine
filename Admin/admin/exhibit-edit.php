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
                    <h4>Edit Exhibit
                        <a href="exhibit-view.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                <?php
                    if(isset($_GET['exhibit_id']))
                    {
                        $exhibit_id = $_GET['exhibit_id'];
                        $exhibit_query = "SELECT * FROM exhibit WHERE exhibit_id='$exhibit_id' LIMIT 1";
                        $exhibit_query_res = mysqli_query($con, $exhibit_query);

                        if(mysqli_num_rows($exhibit_query_res) > 0)
                        {
                            $exhibit_row = mysqli_fetch_array($exhibit_query_res);
                            ?>
                        
                <form action="code.php" method="POST" enctype='multipart/form-data'>

                <input type="hidden" name="exhibit_id" value="<?= $exhibit_row['exhibit_id'] ?>">

                    <div class="row">
                            <p></p>
                            <div class="col-md-6 mb-3">
                                <label for="">Start Date</label>
                                <input type="date" id="start_date" name="start_date" value="<?= $exhibit_row['start_date'] ?>" required class="form-control" min="<?php echo date('Y-m-d'); ?>"/>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">End Date</label>
                                <input type="date" id="end_date" name="end_date" value="<?= $exhibit_row['end_date'] ?>" required class="form-control" min="<?php echo date('Y-m-d'); ?>"/>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="exhibit_title" value="<?= $exhibit_row['name'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL)</label>
                                <input type="text" name="slug" value="<?= $exhibit_row['slug'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" id="summernote" required class="form-control" rows="4"><?= $exhibit_row['description'] ?></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" value="<?= $exhibit_row['meta_title'] ?>" max="200" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" required class="form-control" rows="4"><?= $exhibit_row['meta_description'] ?></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea name="meta_keyword" required class="form-control" rows="4"><?= $exhibit_row['meta_keyword'] ?></textarea>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="">Image</label>
                                <input type="hidden" name="old_image" value="<?= $exhibit_row['image'] ?>" />
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status - <i>Check the box to set status as active</label> <br/>
                                <input type="checkbox" name="status" <?= $exhibit_row['status'] == '0' ? 'checked':'' ?> width="70px" height="70px" />
                            </div>

                            <div class="com-md-6 mb-3">
                                <button type="submit" name="exhibit_update" class="btn btn-primary">Update</button>
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