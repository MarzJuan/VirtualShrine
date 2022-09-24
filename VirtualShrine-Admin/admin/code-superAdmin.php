<?php
include('authentication.php');
include('middleware/superadminAuth.php');

//ARCHIVE CATEGORY
if(isset($_POST['category_archive']))
{
    $category_id = $_POST['category_archive'];
    // 2 = Archived
    $query = "UPDATE categories SET status='2' WHERE id='$category_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Archived Successfully";
        header('Location: category-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: category-view.php');
        exit(0);
    }
}

// ARCHIVE POST
if(isset($_POST['post_archive']))
{
    $posts_id = $_POST['post_archive'];
    // 2 = Archived
    $query = "UPDATE posts SET status='2' WHERE id='$posts_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Post Archived Successfully";
        header('Location: post-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: post-view.php');
        exit(0);
    }
}

?>