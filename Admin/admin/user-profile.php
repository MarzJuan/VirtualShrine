<?php
include('authentication.php');
include('includes/header.php');
?>

<main id="main" class="main">

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
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php include('message.php'); ?>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <?php
            $image = $user['profileImage'];
            if (empty($image))
            $image = "../../uploads/user/Default_pfp.jpeg";
            
            echo '<img src="../uploads/user/'.$image.'" alt="Profile" class="rounded-circle">'
            ?>
              <h2><?= $user['fname'].' '.$user['lname']?></h2>
              <h3>
                <?php 
                  if($user['role_as'] == 0){echo "Super Admin";} 
                  if($user['role_as'] == 1){echo "Assistant Admin";}
                ?>
              </h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?= $user['fname'].' '.$user['lname']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8"><?= $user['username']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?= $user['email']?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="user-profile-code.php" method="POST" enctype='multipart/form-data'>
                    
                  <input type="hidden" name="user_id" value="<?=$user['id']?>">
                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                        <input type="hidden" name="old_image" value="<?= $user['profileImage'] ?>" />
                        <input type="file" name="profileImage" class="form-control" accept="image/*">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fname" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="text" name="fname" class="form-control" id="fname" value="<?= $user['fname']?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="lname" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" name="lname" class="form-control" id="lname" value="<?= $user['lname']?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" name="username" class="form-control" id="username" value="<?= $user['username']?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="email" name="email" class="form-control" id="Email" value="<?= $user['email']?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" name="save_changes" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="user-profile-code.php" method="POST">

                  <input type="hidden" name="user_id" value="<?=$user['id']?>">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button name="change_pass" type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

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
  </main><!-- End #main -->



  
<?php
include('includes/footer.php');
include('includes/script.php');
?>