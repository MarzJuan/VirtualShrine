<?php
include('authentication.php');
include('middleware/superadminAuth.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Assistant Admin</h4>
    <ol class="breadcrumb mb-4">
    <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Users</li>
    </ol>

    <div class="row">
        <div class="col-md-12">

        <?php include('message.php'); ?>
        
            <div class="card">
                <div class="card-header">
                    <h4>Edit Information
                    <a href="assistant-admin-list.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $user_id = $_GET['id'];
                        $users = "SELECT * FROM users WHERE role_as=1 AND id='$user_id'";
                        $users_run = mysqli_query($con, $users);

                        if(mysqli_num_rows($users_run) > 0)
                        {
                            foreach($users_run as $user)
                            {
                            ?>

                    <form action="code.php" method="POST">
                        <input type="hidden" name="user_id" value="<?=$user['id']?>">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="fname" value="<?=$user['fname']?>" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" value="<?=$user['lname']?>" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" value="<?=$user['username']?>" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" value="<?=$user['email']?>" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" value="<?=$user['password']?>" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Status - <i>Check the box to set status as active</label> <br/>
                                <input type="checkbox" name="status" <?=$user['status'] == '0' ? 'checked':'' ?> width="70px" height="70px">
                            </div>

                            <div class="com-md-12 mb-3">
                                <button type="submit" name="update_information" class="btn btn-primary">Update</button>
                            </div>


                        </div>
                    </form>

                    <?php
                            }
                        }
                        else
                        {
                            ?>
                            <h4>No Records Found</h4>
                            <?php
                        }
                    }
                    ?>



                </div>
            </div>
        </div>

    </div>

<?php
include('includes/footer.php');
include('includes/script.php');
?>