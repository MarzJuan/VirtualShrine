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
                            <a class="nav-link collapsed <?= $page == 'assistant-admin-list.php' || $page == 'assistant-admin-add.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAssistantAdmin" aria-expanded="false" aria-controls="collapseAssistantAdmin">
                            <div class="sb-nav-link-icon"><i class='bx bxs-user-detail'></i></div>
                                Admin
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <?php endif; ?>

                            <div class="collapse <?= $page == 'assistant-admin-list.php' || $page == 'assistant-admin-add.php' ? 'show':'' ?>" id="collapseAssistantAdmin" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link <?= $page == 'assistant-admin-list.php' ? 'active':'' ?>" href="assistant-admin-list.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Admin List
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'assistant-admin-add.php' ? 'active':'' ?>" href="assistant-admin-add.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Add New Admin
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>
                            <!--END OF ADMIN-->
                            

                            
                            <!--START OF BOOKINGS-->
                            <?php if($_SESSION['auth_role'] == '1') : ?> <!--ONLY ASSISTANT ADMIN CAN VIEW-->
                            <a class="nav-link collapsed <?= $page == 'booking-pending.php' || $page == 'booking-approved.php' || $page == 'booking-rejected.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBooking" aria-expanded="false" aria-controls="collapseBooking">
                                <div class="sb-nav-link-icon"><i class='bx bxs-book-content' ></i></div>
                                Bookings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <?php endif; ?>

                            <div class="collapse <?= $page == 'booking-pending.php' || $page == 'booking-approved.php' || $page == 'booking-rejected.php' ? 'show':'' ?>" id="collapseBooking" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link <?= $page == 'booking-pending.php' ? 'active':'' ?>" href="booking-pending.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Pending Bookings
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'booking-approved.php' ? 'active':'' ?>" href="booking-approved.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Approved Bookings
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'booking-rejected.php' ? 'active':'' ?>" href="booking-rejected.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Rejected Bookings
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>
                                </nav>
                            </div>
                            <!--END OF BOOKINGS-->



                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            
                            <!-- START OF POSTS-->
                            <a class="nav-link collapsed <?= $page == 'post-view.php' || $page == 'audio-view.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                                <div class="sb-nav-link-icon"><i class='bx bx-windows'></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse <?= $page == 'post-view.php' || $page == 'audio-view.php' ? 'show':'' ?>" id="collapsePosts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link <?= $page == 'post-view.php' ? 'active':'' ?>" href="post-view.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Gallery
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'audio-view.php' ? 'active':'' ?>" href="audio-view.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Audio Guide
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>
                            <!--END OF POST-->



                            <!--START OF CATEGORY-->
                            <?php if($_SESSION['auth_role'] == '0') : ?><!--ONLY SUPER ADMIN CAN VIEW-->
                            <a class="nav-link collapsed <?= $page == 'category-add.php' || $page == 'category-view.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                                <div class="sb-nav-link-icon"><i class='bx bxs-category-alt'></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <?php endif; ?>

                            <div class="collapse <?= $page == 'category-add.php' || $page == 'category-view.php' ? 'show':'' ?>" id="collapseCategory" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link <?= $page == 'category-add.php' ? 'active':'' ?>" href="category-add.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Add Category
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link <?= $page == 'category-view.php' ? 'active':'' ?>" href="category-view.php">
                                    <div class="sb-nav-link-icon"></div>
                                        View Category
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>
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
                            <a class="nav-link collapsed <?= $page == 'archive-user.php' || $page == 'archive-category.php' || $page == 'post-archive.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseArchive" aria-expanded="false" aria-controls="collapseArchive">
                                <div class="sb-nav-link-icon"><i class="bx bx-archive-in"></i></div>
                                Archive
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

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
                                        Posts
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
                        <?php if(isset($_SESSION['auth_user'])) : ?>
                            <?= $_SESSION['auth_user']['user_name']; ?>
                        <?php endif; ?>
                    </div>
                </nav>
            </div>

            