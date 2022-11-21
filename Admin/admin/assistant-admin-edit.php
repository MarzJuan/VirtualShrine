<?php
include('authentication.php');
include('middleware/superadminAuth.php');
include('includes/header.php');
?>

<main id="main" class="main">
    <h4 class="mt-4">Edit Assistant Admin Information</h4>
    <ol class="breadcrumb mb-4">
    <a class="breadcrumb-item active" href="index.php">Dashboard</a>
        <li class="breadcrumb-item">Edit User Information</li>
    </ol>

    <div class="row">
        <div class="col-md-12">

        <?php include('message.php'); ?>
        
            <div class="card">
                <div class="card-header">
                    <h4>Edit Information
                    <a href="admin-list.php" class="btn btn-primary float-end">Back</a>
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
                                <input type="text" name="fname" value="<?=$user['fname']?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" value="<?=$user['lname']?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" value="<?=$user['username']?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" value="<?=$user['email']?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?=$user['password']?>" required class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Check Password</label>
                                <input type="text" name="cpassword" required class="form-control">
                            </div>

                            <style>
                                /* The message box is shown when the user clicks on the password field */
                                #message {
                                display:none;
                                color: #000;
                                position: relative;
                                padding: 20px;
                                margin-top: 1px;
                                }

                                #message p {
                                padding: 1px 20px;
                                font-size: 15px;
                                }

                                /* Add a green text color and a checkmark when the requirements are right */
                                .valid {
                                color: green;
                                }

                                .valid:before {
                                position: relative;
                                left: -10px;
                                content: "\2713";
                                }

                                /* Add a red text color and an "x" icon when the requirements are wrong */
                                .invalid {
                                color: red;
                                }

                                .invalid:before {
                                position: relative;
                                left: -10px;
                                content: "\2715";
                                }
                            </style>
                            <div id="message">
                                <h6>Password must contain the following:</h6>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
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
</main>
    <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
        }
</script>

<?php
include('includes/footer.php');
include('includes/script.php');
?>