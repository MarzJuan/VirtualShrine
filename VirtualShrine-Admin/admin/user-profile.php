<?php
include('authentication.php');
include('includes/header.php');

$user_pic = "../uploads/user/".$username.".jpg";
$default = "../uploads/user/defaultPFP.jpeg";

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

<section class="vh-100" style="background-color: #f4f5f7;">
<?php include('message.php'); ?>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-left align-items-center h-200">
      <div class="col col-lg-12 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-black"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img class="rounded-circle mt-5" width="150px" src="<?php if(isset($profile_picture)) echo $profile_picture; ?>">
              <h5>@<?= $user['username']; ?></h5>
              <p><?php if($user['role_as'] == 0){echo "Head Admin";} 
                    if($user['role_as'] == 1){echo "Assistant Admin";}
                    ?></p>
              <a href="profile-edit.php?id=<?= $user['id']?>"><i class="far fa-edit mb-5"></i></a>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Full Name</h6>
                    <p class="text-muted"><?= $user['fname']. " " .$user['lname']; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?= $user['email']; ?></p>
                  </div>
                </div>
                
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Created</h6>
                    <p class="text-muted"><?= $user['created_at']; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Status</h6>
                    <p class="text-muted">
                        <?php if($user['status'] == 0){echo "Active";} 
                        if($user['status'] == 1){echo "Inactive";}
                    ?></p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
                }
            }
        }

?>

<?php
include('includes/footer.php');
include('includes/script.php');
?>
