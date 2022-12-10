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
                    <h4>Add Content
                        <a href="post-view.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                <?php if (isset($_GET['error'])) {  ?>
                <p><?=$_GET['error']?></p>
                <?php } ?>
                
                <form action="code.php" method="POST" enctype='multipart/form-data'>

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
                                        <option value="<?= $categoryitem['id'] ?>"><?= $categoryitem['name'] ?></option>
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

                        
                        <!-- OUTSIDE FORM -->

                        <div class="col-md-12 mb-3">
                                <label for="">Slug (URL)<span style="color:red;">*</span></label>
                                <input type="text" name="slug" class="form-control" aria-required="true" aria-invalid="false" autocomplete="off" data-parsley-required="" data-parsley-required-message="Slug (URL) is required">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Year</label>
                                <input type="text" name="year" class="form-control" aria-required="true" aria-invalid="false" autocomplete="off" data-parsley-required="" data-parsley-required-message="Year is required">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Type of Object</label>
                                <input type="text" name="object_type" required class="form-control" aria-required="true" aria-invalid="false" autocomplete="off" data-parsley-required="" data-parsley-required-message="Type of Object is required">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" max="200" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" required class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea name="meta_keyword" required class="form-control" rows="4"></textarea>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" required class="form-control" accept="image/*">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status - <i>Check the box to set status as active</label> <br/>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>

                        <br><br><br><br>
                        <hr>
                        <br>
                        
                        <!-- ENGLISH -->
                        <p><i>Please provide the following information in <b>English</b>:</i></p>
                            <div class="col-md-12 mb-3">
                                <label for="">Name (English)</label>
                                <input type="text" name="eng_name" required class="form-control">
                            </div>

                            
                            <div class="col-md-12 mb-3">
                            <label for="">Audio File (English)</label>
                            <input type="file" name="eng_audio" class="form-control" accept="audio/mp3,audio/*;capture=microphone">
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="">Description (English)</label>
                                <textarea name="eng_description" required class="form-control summernote" rows="4"></textarea>
                            </div>
                        

                        <!-- FILIPINO -->
                        <br><br><br><br>
                        <hr>
                        <br><br>
                        <p><i>Please provide the following information in <b>Filipino</b>:</i></p>
                            <div class="col-md-12 mb-3">
                                <label for="">Name (Filipino)</label>
                                <input type="text" name="fil_name" required class="form-control">
                            </div>

                            
                            <div class="col-md-12 mb-3">
                                <label for="">Audio File (Filipino)</label>
                                <input type="file" name="fil_audio" class="form-control" accept="audio/mp3,audio/*;capture=microphone">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description (Filipino)</label>
                                <textarea name="fil_description" required class="form-control summernote" rows="4"></textarea>
                            </div>


                        
                            <div class="com-md-6 mb-3">
                                <button type="submit" name="post_add" required class="btn btn-primary">Post</button>
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