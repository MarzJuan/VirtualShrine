<?php
include('config/dbcon.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4"></h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Add User</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add User</h4>
                </div>
                <div class="card-body">


                <form action="code.php" method="POST">

                    <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="fname" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Role as</label>
                                <select name="role_as" class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="0">Head Admin</option>
                                    <option value="1">Assistant Admin</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" width="70px" height="70px">
                            </div>

                            <div class="com-md-12 mb-3">
                                <button type="submit" name="add_admin" class="btn btn-primary">Add User</button>
                            </div>


                        </div>
                    </form>




                </div>
            </div>
        </div>

    </div>

<?php
include('includes/footer.php');
include('includes/script.php');
?>