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
                    <h4>
                        <a href="exhibit-display-view.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                <?php if (isset($_GET['error'])) {  ?>
                <p><?=$_GET['error']?></p>
                <?php } ?>
                
                <form action="code.php" method="POST" enctype='multipart/form-data'>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <p></p>
                            <label for="">Exhibit List</label>
                            <?php
                            $exhibit = "SELECT * FROM exhibit WHERE status='0' ";
                            $exhibit_run = mysqli_query($con, $exhibit);

                            if(mysqli_num_rows($exhibit_run) > 0)
                            {
                            ?>
                                <select name="exhibit_id" required class="form-control">
                                    <option value="">-- Select Exhibit --</option>
                                    <?php
                                    foreach($exhibit_run as $exhibititem)
                                        {
                                        ?>
                                        <option value="<?= $exhibititem['exhibit_id'] ?>"><?= $exhibititem['name'] ?></option>
                                        <?php
                                        }
                                    ?>
                                </select>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h6>No Catgeory Available</h6>
                                <?php
                            }

                            ?>


                            
                        </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Name<span style="color:red;">*</span></label>
                                <input type="text" name="name" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL)<span style="color:red;">*</span></label>
                                <input type="text" name="slug" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description<span style="color:red;">*</span></label>
                                <textarea name="description" id="summernote" required class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Year<span style="color:red;">*</span></label>
                                <input type="text" name="year" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Type of Object<span style="color:red;">*</span></label>
                                <input type="text" name="object_type" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title<span style="color:red;">*</span></label>
                                <input type="text" name="meta_title" max="200" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta Description<span style="color:red;">*</span></label>
                                <textarea name="meta_description" required class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta Keyword<span style="color:red;">*</span></label>
                                <textarea name="meta_keyword" required class="form-control" rows="4"></textarea>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="">Image<span style="color:red;">*</span></label>
                                <input type="file" name="image[]" class="form-control" multiple required accept="image/*">
                            </div>

                            <div class="col-md-6 mb-3">
                            <label for="">Audio File<span style="color:red;">*</span></label>
                            <input type="file" name="my_audio" class="form-control" accept="audio/mp3,audio/*;capture=microphone">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status - <i>Check the box to set status as active</label> <br/>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>

                            <div class="com-md-6 mb-3">
                                <button type="submit" name="display_add" required class="btn btn-primary">Post</button>
                            </div>


                        </div>
                    </form>




                </div>
            </div>
        </div>

    </div>
</main>

<?php
include('includes/footer.php');
include('includes/script.php');
?>