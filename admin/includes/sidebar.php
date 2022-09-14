<div id="layoutSidenav_nav">
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


                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAssistantAdmin" aria-expanded="false" aria-controls="collapseAssistantAdmin">
                                <div class="sb-nav-link-icon"><i class='bx bxs-user-detail'></i></div>
                                Admin
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseAssistantAdmin" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="assistant-admin-list.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Admin List
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link" href="assistant-admin-add.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Add New Admin
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>

                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBooking" aria-expanded="false" aria-controls="collapseBooking">
                                <div class="sb-nav-link-icon"><i class='bx bxs-book-content' ></i></div>
                                Bookings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseBooking" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="booking-pending.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Pending Bookings
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link" href="booking-approved.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Approved Bookings
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                                <div class="sb-nav-link-icon"><i class='bx bx-windows'></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapsePosts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="post-add.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Add Post
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link" href="post-view.php">
                                    <div class="sb-nav-link-icon"></div>
                                        View Post
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                                <div class="sb-nav-link-icon"><i class='bx bxs-category-alt'></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseCategory" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="category-add.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Add Category
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>
                                    <a class="nav-link" href="category-view.php">
                                    <div class="sb-nav-link-icon"></div>
                                        View Category
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>

                            

                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class='bx bxs-report' ></i></div>
                                Reports
                            </a>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseArchive" aria-expanded="false" aria-controls="collapseArchive">
                                <div class="sb-nav-link-icon"><i class="bx bx-archive-in"></i></div>
                                Archive
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseArchive" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link" href="archive-user.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Archived Users
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>

                                    <a class="nav-link" href="archive-category.php">
                                    <div class="sb-nav-link-icon"></div>
                                        Archived Category
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="bx bx-archive-in"></i></div>
                                Archive
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <hr>
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>