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
                    <h4>Create a New Blog Post
                        <a href="blog-view.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                <?php if (isset($_GET['error'])) {  ?>
                <p><?=$_GET['error']?></p>
                <?php } ?>
                
                <form action="code.php" method="POST" enctype='multipart/form-data'>

                    <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Blog Title</label>
                                <input type="text" name="blog_title" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL)</label>
                                <input type="text" name="slug" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Author</label>
                                <input type="text" name="author" max="200" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" required class="form-control summernote" rows="4"></textarea>
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
                                <input type="file" name="image[]" class="form-control" multiple required accept="image/*">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status - <i>Check the box to set status as active</label> <br/>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>

                            <div class="com-md-6 mb-3">
                                <button type="submit" name="blog_add" required class="btn btn-primary">Post</button>
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