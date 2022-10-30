<style type="text/css" media="print">
        @media print{
            .noprint, .noprint *{
                display: none; !important;
            }
        }
    </style>

<nav class="sb-topnav navbar navbar-expand bg-dark">
            <!-- Navbar Brand-->
            <img class="navbar-brand" href="index.html" src="VirtualShrineLogo.png">
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 noprint" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
                <!--<div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>-->
            </form>

            <!-- Navbar-->

        <?php
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

            
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle noprint" href="#" id="userDropdown" role="button" 
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </i><?= $_SESSION['auth_user']['user_name']; ?> <!-- Display the username on top navbar-->
                        <img class="img-profile rounded-circle noprint"
                                src="<?php if(isset($profile_picture)) echo $profile_picture; ?>"
                                width="30" 
                                height="30"/>
                    </a>
                    
                    
                   
                            
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a href="user-profile.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="dropdown-item" >
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                
                                
                                <form action="../allcode.php" method="POST">
                                    <button type="submit" name="logout_btn" class="dropdown-item" href="#">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </button>
                                   
                            
                                
                    </form>
                            </div>
                        
                    </ul>
                </li>
            </ul>
        </nav>