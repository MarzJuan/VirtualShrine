<?php
include('authentication.php');
include('middleware/superadminAuth.php');

// RECOVER ARCHIVED AUDIO

if(isset($_POST['audio_recover']))
{
    $audio_id = $_POST['audio_recover'];
    // 0 = Visible
    $query = "UPDATE audio SET status='0' WHERE audio_id='$audio_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Audio Recovered Successfully";
        header('Location: audio-archive.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: audio-archive.php');
        exit(0);
    }

}

//CATEGORY ARCHIVE RECOVER
if(isset($_POST['archive_recover']))
{
    $category_id = $_POST['archive_recover'];
    // 0 = Visible
    $query = "UPDATE categories SET status='0' WHERE id='$category_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Recovered Successfully";
        header('Location: archive-category.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: archive-category.php');
        exit(0);
    }

}

// RECOVER ARCHIVED POST

if(isset($_POST['post_recover']))
{
    $posts_id = $_POST['post_recover'];
    // 0 = Visible
    $query = "UPDATE posts SET status='0' WHERE id='$posts_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Post Recovered Successfully";
        header('Location: post-archive.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: post-archive.php');
        exit(0);
    }

}

// RECOVER ASSISTANT ADMIN

if(isset($_POST['user-recover']))
{
    $posts_id = $_POST['user-recover'];
    // 0 = Visible
    $query = "UPDATE users SET status='0', updated_at = CURRENT_TIMESTAMP() WHERE id='$posts_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Assistant Admin Recovered Successfully";
        header('Location: archive-user.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: archive-user.php');
        exit(0);
    }

}


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

// ARCHIVE AUDIO
if(isset($_POST['audio_archive']))
{
    $audio_id = $_POST['audio_archive'];
    // 2 = Archived
    $query = "UPDATE audio SET status='2' WHERE audio_id='$audio_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Audio Archived Successfully";
        header('Location: audio-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: audio-view.php');
        exit(0);
    }
}

// ARCHIVE USER
if(isset($_POST['user_archive']))
{
    $user_id = $_POST['user_archive'];
    // 2 = Archived
    $query = "UPDATE users SET status='2', updated_at = CURRENT_TIMESTAMP() WHERE id='$user_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Assistant Admin Archived Successfully";
        header('Location: admin-list.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: admin-list.php');
        exit(0);
    }
}

?>