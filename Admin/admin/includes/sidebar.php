 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>


<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1); ?>

  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'index.php' ? 'active':'' ?>" href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <?php if($_SESSION['auth_role'] == '0') : ?> <!--ONLY SUPER ADMIN CAN VIEW-->
  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'admin-list.php' || $page == 'assistant-admin-edit.php' ? 'active':'' ?>" href="admin-list.php">
      <i class="bi bi-people"></i>
      <span>Users</span>
    </a>
  </li>
  <?php endif; ?>
  <!-- End Users Nav -->

  <li class="nav-item">
  <?php
              $sql = "SELECT * FROM  bookings WHERE status='0' OR status='3' ORDER BY booking_id DESC";
              $res = mysqli_query($con, $sql);
          ?>
    <a class="nav-link collapsed <?= $page == 'booking-pending.php' || $page == 'booking-approved.php' || $page == 'booking-rejected.php' || $page == 'booking-cancelled.php' || $page == 'booking-details.php' || $page == 'booking-details-reject.php' || $page == 'booking-details-cancelled.php' || $page == 'booking-details-approved.php' ? 'active':'' ?>" 
    data-bs-target="#bookings-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-bookmark"></i><span>Bookings&nbsp;&nbsp;&nbsp;</span><span class="badge bg-primary badge-number"><?php echo mysqli_num_rows($res);?></span>
      <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="bookings-nav" class="nav-content collapse <?= $page == 'booking-pending.php' || $page == 'booking-approved.php' || $page == 'booking-rejected.php' || $page == 'booking-cancelled.php' || $page == 'booking-details.php' || $page == 'booking-details-reject.php' || $page == 'booking-details-cancelled.php' || $page == 'booking-details-approved.php' ? 'show':'' ?>" 
    data-bs-parent="#sidebar-nav">

      <li>
        <a href="booking-pending.php" class="nav-link <?= $page == 'booking-pending.php' || $page == 'booking-details.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Pending</span>
        </a>
      </li>
      <li>
        <a  href="booking-approved.php" class="nav-link <?= $page == 'booking-approved.php' || $page == 'booking-details-approved.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Approved</span>
        </a>
      </li>
      <li>
        <a href="booking-rejected.php" class="nav-link <?= $page == 'booking-rejected.php' || $page == 'booking-details-reject.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Rejected</span>
        </a>
      </li>
      <li>
        <a href="booking-cancelled.php" class="nav-link <?= $page == 'booking-cancelled.php' || $page == 'booking-details-cancelled.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Cancelled</span>
        </a>
      </li>
    </ul>
  </li><!-- End Bookings Nav -->
  
    <br>
    <li class="nav-heading">Interfaces</li>
    <br>
    
  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'post-view.php' || $page == 'post-edit.php' || $page == 'post-add.php' || $page == 'blog-view.php' || $page == 'blog-edit.php' || $page == 'blog-add.php' || $page == 'exhibit-display-view.php' || $page == 'exhibit-display-edit.php' || $page == 'exhibit-display-add.php' ? 'active':'' ?>" 
    data-bs-target="#CMSnav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-blockquote-left"></i><span>CMS</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="CMSnav" class="nav-content collapse <?= $page == 'post-view.php' || $page == 'post-edit.php' || $page == 'post-add.php' || $page == 'blog-view.php' || $page == 'blog-edit.php' || $page == 'blog-add.php' || $page == 'exhibit-display-view.php' || $page == 'exhibit-display-edit.php' || $page == 'exhibit-display-add.php' ? 'show':'' ?>" 
    data-bs-parent="#sidebar-nav">

      <li>
        <a href="post-view.php" class="nav-link <?= $page == 'post-view.php' || $page == 'post-edit.php' || $page == 'post-add.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Collection</span>
        </a>
      </li>

      <li>
        <a href="exhibit-display-view.php" class="nav-link <?= $page == 'exhibit-display-view.php' || $page == 'exhibit-display-edit.php' || $page == 'exhibit-display-add.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Exhibit Display</span>
        </a>
      </li>

      <li>
        <a href="blog-view.php" class="nav-link <?= $page == 'blog-view.php' || $page == 'blog-edit.php' || $page == 'blog-add.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Blog</span>
        </a>
      </li>
    </ul>
  </li><!-- End CMS Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'active':'' ?>" 
    data-bs-target="#Categorynav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-blockquote-left"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="Categorynav" class="nav-content collapse <?= $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' || $page == 'section-add.php' || $page == 'section-view.php' || $page == 'section-edit.php' || $page == 'exhibit-add.php' || $page == 'exhibit-view.php' || $page == 'exhibit-edit.php' ? 'show':'' ?>" 
    data-bs-parent="#sidebar-nav">

      <li>
        <a href="category-view.php" class="nav-link <?= $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Gallery</span>
        </a>
      </li>

      <!-- <li>
        <a href="section-view.php" class="nav-link <?= $page == 'section-add.php' || $page == 'section-view.php' || $page == 'section-edit.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Section</span>
        </a>
      </li> -->

      <li>
        <a href="exhibit-view.php" class="nav-link <?= $page == 'exhibit-add.php' || $page == 'exhibit-view.php' || $page == 'exhibit-edit.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Exhibits</span>
        </a>
      </li>


    </ul>
  </li><!-- End CATEGORY Nav -->

  <?php if($_SESSION['auth_role'] == '0') : ?>
  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'report.php' ? 'active':'' ?>" href="report.php">
      <i class="bi bi-people"></i>
      <span>Report</span>
    </a>
  </li><!-- End Reports Nav -->
  <?php endif; ?>

  <?php if($_SESSION['auth_role'] == '0') : ?>
  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'archive-user.php' || $page == 'archive-category.php' || $page == 'post-archive.php' ? 'active':'' ?>" 
    data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-archive"></i><span>Archive</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  <?php endif; ?>
    <ul id="tables-nav" class="nav-content collapse <?= $page == 'archive-user.php' || $page == 'archive-category.php' || $page == 'post-archive.php' || $page == 'audio-archive.php' ? 'show':'' ?>" 
    data-bs-parent="#sidebar-nav">
      <li>
        <a href="archive-user.php" class="nav-link <?= $page == 'archive-user.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Users</span>
        </a>
      </li>
      <li>
        <a href="post-archive.php" class="nav-link <?= $page == 'post-archive.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Collection</span>
        </a>
      </li>
      <li>
        <a href="archive-exhibit-display.php" class="nav-link <?= $page == 'archive-exhibit-display.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Exhibit Display</span>
        </a>
      </li>
      <li>
        <a href="archive-blog.php" class="nav-link <?= $page == 'archive-blog.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Blog</span>
        </a>
      </li>
      <li>
        <a href="archive-category.php" class="nav-link <?= $page == 'archive-category.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Gallery Category</span>
        </a>
      </li>
      <li>
        <a href="archive-exhibits.php" class="nav-link <?= $page == 'archive-category.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Exhibits</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

</ul>

</aside><!-- End Sidebar-->