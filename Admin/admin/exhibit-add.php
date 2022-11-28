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
                    <h4>Add Exhibit
                        <a href="exhibit-view.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">


                <form action="code.php" method="POST" enctype='multipart/form-data'>

                    <div class="row">
                        
                            <div class="col-md-6 mb-3">
                                <label for="">Start Date</label>
                                <input type="date" id="start_date" name="start_date" class="form-control" min="<?php echo date('Y-m-d'); ?>"/>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">End Date</label>
                                <input type="date" id="end_date" name="end_date" class="form-control" min="<?php echo date('Y-m-d'); ?>"/>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL)</label>
                                <input type="text" name="slug" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" required class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" max="200" class="form-control">
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
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status - <i>Check the box to set status as active</i></label> <br/>
                                <input type="checkbox" name="status" width="70px" height="70px">
                            </div>

                            <div class="com-md-6 mb-3">
                                <button type="submit" name="add_exhibit" class="btn btn-primary">Save Exhibit</button>
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