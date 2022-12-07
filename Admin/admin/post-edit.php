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
                    <h4>Edit Content
                        <a href="post-view.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="code.php" method="POST" enctype='multipart/form-data'>
                <?php
                    if(isset($_GET['post_id']))
                    {
                        $post_id = $_GET['post_id'];
                        $post_query = "SELECT * FROM posts WHERE post_id='$post_id' LIMIT 1";
                        $post_query_res = mysqli_query($con, $post_query);

                        if(mysqli_num_rows($post_query_res) > 0)
                        {
                            $post_row = mysqli_fetch_array($post_query_res);
                            ?>

                <input type="hidden" name="post_id" value="<?= $post_row['post_id'] ?>">

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
                                        <option value="<?= $categoryitem['id']?>" <?= $categoryitem['id'] == $post_row['category_id'] ? 'selected':'' ?>>
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

                        <div>
                        <p>Language:</p>
                        <div class="tab">
                        <button type="button" class="tablinks" onclick="openLanguage(event, 'Filipino')">Filipino</button>
                        <button type="button" class="tablinks" onclick="openLanguage(event, 'English')">English</button>
                        </div>
                        
                        
                        <!-- Tab content -->
                        <!-- ENGLISH -->
                        <div id="English" class="tabcontent">
                            <div class="col-md-6 mb-3">
                                <label for="">Name (English)</label>
                                <input type="text" name="eng_name" value="<?= $post_row['eng_name'];?>" required class="form-control">
                            </div>

                            
                            <div class="col-md-6 mb-3">
                                <label for="">Audio File (English)</label>
                                <input type="hidden" name="eng_old_audio" value="<?= $post_row['eng_audio'] ?>"/>
                                <input type="file" name="eng_audio" class="form-control" accept="audio/mp3,audio/*;capture=microphone">
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="">Description (English)</label>
                                <textarea name="eng_description" required class="form-control summernote" rows="4"><?= $post_row['eng_description'] ?></textarea>
                            </div>
                        </div>

                        <!-- FILIPINO -->
                        <div id="Filipino" class="tabcontent">
                            <div class="col-md-6 mb-3">
                                <label for="">Name (Filipino)</label>
                                <input type="text" name="fil_name" value="<?= $post_row['fil_name'] ?>" required class="form-control">
                            </div>

                            
                            <div class="col-md-6 mb-3">
                                <label for="">Audio File (Filipino)</label>
                                <input type="hidden" name="fil_old_audio" value="<?= $post_row['fil_audio'] ?>"/>
                                <input type="file" name="fil_audio" class="form-control" accept="audio/mp3,audio/*;capture=microphone">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description (Filipino)</label>
                                <textarea name="fil_description" required class="form-control summernote" rows="4"><?= $post_row['fil_description'] ?></textarea>
                            </div>
                        </div>

                        </div>
                        <br><br><br><br><br><br>
                        <hr>

                        <br><br><br>
                        <!-- OUTSIDE FORM -->

                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL)</label>
                                <input type="text" name="slug" value="<?= $post_row['slug'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Year</label>
                                <input type="text" name="year" value="<?= $post_row['year'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Type of Object</label>
                                <input type="text" name="object_type" value="<?= $post_row['object_type'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
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
                                <button type="submit" name="post_update" class="btn btn-primary">Update</button>
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