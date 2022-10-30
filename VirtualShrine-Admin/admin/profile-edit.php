<?php
include('authentication.php');
include('includes/header.php');

$user_pic = "../uploads/user/".$username.".jpg";
$default = "../uploads/user/defaultProfile.jpeg";

if(file_exists($user_pic)){
  $profile_picture = $user_pic;
}
else
{
  $profile_picture = $default;
}
?>

<input type="hidden" name="user_id" value="<?=$user['id']?>">
<?php
    if(isset($_GET['id']))
        {  
            $user_id = $_GET['id'];
            $users = "SELECT * FROM users WHERE id='$user_id'";
            $user_run = mysqli_query($con, $users);


            if(mysqli_num_rows($user_run) > 0)
            {
                while($user = mysqli_fetch_assoc($user_run))
                {
                ?>

<div class="container rounded bg-white mt-5 mb-5">

<?php if (isset($_GET['error'])) {  ?>
                <p><?=$_GET['error']?></p>
                <?php } ?>

<form action="code.php" method="POST" enctype='multipart/form-data'>

    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="<?php if(isset($profile_picture)) echo $profile_picture; ?>">
                <span class="font-weight-bold">
                <form action="code.php" method = "POST">
                <i class = "fa fa-camera" style = "color: #fff;"></i>
                </form>
                <?= $user['fname']. " " .$user['lname']; ?></span>
                <span class="text-black-50"><?= $user['email']; ?></span><span> </span></div>
        </div>
        <div class="col-md-7">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="<?=$user['fname']?>" name="fname"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="<?=$user['lname']?>" name="lname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" placeholder="enter phone number" value="<?=$user['username']?>" name="username"></div>
                    <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter address line 1" value="<?=$user['email']?>" name="email"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Password</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?=$user['password']?>" name="password"></div>
                
                <div class="col-md-6"><label class="labels">Change Profile Picture</label><input type="file" name="profileImage" value="<?=$user['profileImage']?>" class="form-control">
                </div>

                <form action="code.php" method = "POST">
                <div class="mt-5 text-center"><button type="submit" class="btn btn-primary profile-button" name="edit_profile">Save Profile</button></div>
                </form>
            </div>
        </div>
    </div>

<?php
                }
            }
        }

?>










<?php
include('includes/footer.php');
include('includes/script.php');
?>