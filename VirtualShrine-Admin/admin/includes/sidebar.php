<div id="layoutSidenav_nav">
    <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>


    <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1); ?>
    
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">  </div>

                            <div class="sb-sidenav-menu-heading">Core</div>

                            <a class="nav-link <?= $page == 'index.php' ? 'active':'' ?>" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <!--
                            <a class="nav-link <?= $page == 'index.php' ? 'active':'' ?>" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard 
                            </a>
                            -->
                            
                            <!--START OF ADMIN-->
                            <?php if($_SESSION['auth_role'] == '0') : ?> <!--ONLY SUPER ADMIN CAN VIEW-->
                            <a class="nav-link collapsed <?= $page == 'assistant-admin-list.php' || $page == 'assistant-admin-edit.php' ? 'active':'' ?>" href="assistant-admin-list.php">
                            <div class="sb-nav-link-icon"><i class='bx bxs-user-detail'></i></div>
                                Assistant Admin
                            <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <?php endif; ?>
                            <!--END OF ADMIN-->
                            

                            
                            <!--START OF BOOKINGS-->
                            <a class="nav-link collapsed <?= $page == 'booking-pending.php' || $page == 'booking-approved.php' || $page == 'booking-rejected.php' || $page == 'booking-cancelled.php' || $page == 'booking-details.php' || $page == 'booking-details-reject.php' || $page == 'booking-details-cancelled.php' || $page == 'booking-details-approved.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBooking" aria-expanded="false" aria-controls="collapseBooking">
                                <div class="sb-nav-link-icon"><i class='bx bxs-book-content' ></i></div>
                                Bookings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse <?= $page == 'booking-pending.php' || $page == 'booking-approved.php' || $page == 'booking-rejected.php' || $page == 'booking-cancelled.php' || $page == 'booking-details.php' || $page == 'booking-details-reject.php' || $page == 'booking-details-cancelled.php' || $page == 'booking-details-approved.php' ? 'show':'' ?>" id="collapseBooking" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link <?= $page == 'booking-pending.php' || $page == 'booking-details.php' ? 'active':'' ?>" href="booking-pending.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Pending Bookings
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'booking-approved.php' || $page == 'booking-details-approved.php' ? 'active':'' ?>" href="booking-approved.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Approved Bookings
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'booking-rejected.php' || $page == 'booking-details-reject.php' ? 'active':'' ?>" href="booking-rejected.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Rejected Bookings
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'booking-cancelled.php' || $page == 'booking-details-cancelled.php' ? 'active':'' ?>" href="booking-cancelled.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Cancelled Bookings
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>
                                </nav>
                            </div>
                            <!--END OF BOOKINGS-->



                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            
                            <!-- START OF POSTS-->
                            <a class="nav-link collapsed <?= $page == 'post-view.php' || $page == 'audio-view.php' || $page == 'post-edit.php' || $page == 'audio-edit.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                                <div class="sb-nav-link-icon"><i class='bx bx-windows'></i></div>
                                CMS
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse <?= $page == 'post-view.php' || $page == 'audio-view.php' || $page == 'post-edit.php' || $page == 'audio-edit.php' ? 'show':'' ?>" id="collapsePosts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link <?= $page == 'post-view.php' || $page == 'post-edit.php' ? 'active':'' ?>" href="post-view.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Gallery
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'audio-view.php' || $page == 'audio-edit.php' ? 'active':'' ?>" href="audio-view.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Audio Guide
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>
                            <!--END OF POST-->



                            <!--START OF CATEGORY-->

                            <?php if($_SESSION['auth_role'] == '0') : ?> <!--ONLY SUPER ADMIN CAN VIEW-->
                            <a class="nav-link collapsed <?= $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'active':'' ?>" href="category-view.php">
                            <div class="sb-nav-link-icon"><i class='bx bxs-category-alt'></i></div>
                                Gallery Category
                            <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <?php endif; ?>
                            <!--END OF CATEGORY-->

                            

                            <!--START OF REPORTS-->
                            <?php if($_SESSION['auth_role'] == '0') : ?>
                            <a class="nav-link" href="report.php">
                                <div class="sb-nav-link-icon"><i class='bx bxs-report' ></i></div>
                                Reports
                            </a>
                            <?php endif; ?>
                            <!--END OF REPORTS-->
                            


                            <!--START OF ARCHIVE-->
                            <?php if($_SESSION['auth_role'] == '0') : ?>
                            <a class="nav-link collapsed <?= $page == 'archive-user.php' || $page == 'archive-category.php' || $page == 'post-archive.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseArchive" aria-expanded="false" aria-controls="collapseArchive">
                                <div class="sb-nav-link-icon"><i class="bx bx-archive-in"></i></div>
                                Archive
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <?php endif; ?>

                            <div class="collapse <?= $page == 'archive-user.php' || $page == 'archive-category.php' || $page == 'post-archive.php' || $page == 'audio-archive.php' ? 'show':'' ?>" id="collapseArchive" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link <?= $page == 'archive-user.php' ? 'active':'' ?>" href="archive-user.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Users
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'archive-category.php' ? 'active':'' ?>" href="archive-category.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Category
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    
                                    <a class="nav-link <?= $page == 'post-archive.php' || $page == 'audio-archive.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePostArchive" aria-expanded="false" aria-controls="collapsePostArchive">
                                    <div class="sb-nav-link-icon"></div>
                                        CMS
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>

                                        <div class="collapse <?= $page == 'post-archive.php' || $page == 'audio-archive.php' ? 'show':'' ?>" id="collapsePostArchive" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            
                                            <!--START OF GALLERY ARCHIVE-->
                                            <a class="nav-link <?= $page == 'post-archive.php' ? 'active':'' ?>" href="post-archive.php">
                                            <div class="sb-nav-link-icon"></div>
                                                Gallery
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            </div>
                                             <!--END OF GALLERY ARCHIVE-->

                                             <!--START OF AUDIO ARCHIVE-->
                                            <a class="nav-link <?= $page == 'audio-archive.php' ? 'active':'' ?>" href="audio-archive.php">
                                            <div class="sb-nav-link-icon"></div>
                                                Audio
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            </div>
                                             <!--END OF AUDIO ARCHIVE-->
                                             
                                    </div>
                                    <!--END OF ARCHIVE-->

                    

                                </nav>
                            </div>

                        </div>
                    </div>
                    



                    <div class="sb-sidenav-footer">
                        <hr>
                        <div class="small">Logged in as:</div>
                        <?php if(isset($_SESSION['auth_user'])) : 
                            if($_SESSION['auth_role'] == '0')
                            {
                            echo "Super Admin"; 
                            }
                            else
                            {
                            echo "Assistant Admin";
                            }
                            ?>
                        <?php endif; ?>
                    </div>
                </nav>
            </div>

            