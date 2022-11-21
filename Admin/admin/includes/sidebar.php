 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>


<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1); ?>

  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'index.php' ? 'active':'' ?>" href="index.php?id=<?= $_SESSION['auth_user']['user_id'];?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <?php if($_SESSION['auth_role'] == '0') : ?> <!--ONLY SUPER ADMIN CAN VIEW-->
  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'admin-list.php' || $page == 'assistant-admin-edit.php' ? 'active':'' ?>" href="admin-list.php?id=<?= $_SESSION['auth_user']['user_id'];?>">
      <i class="bi bi-people"></i>
      <span>Users</span>
    </a>
  </li>
  <?php endif; ?>
  <!-- End Users Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'booking-pending.php' || $page == 'booking-approved.php' || $page == 'booking-rejected.php' || $page == 'booking-cancelled.php' || $page == 'booking-details.php' || $page == 'booking-details-reject.php' || $page == 'booking-details-cancelled.php' || $page == 'booking-details-approved.php' ? 'active':'' ?>" 
    data-bs-target="#bookings-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-bookmark"></i><span>Bookings</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="bookings-nav" class="nav-content collapse <?= $page == 'booking-pending.php' || $page == 'booking-approved.php' || $page == 'booking-rejected.php' || $page == 'booking-cancelled.php' || $page == 'booking-details.php' || $page == 'booking-details-reject.php' || $page == 'booking-details-cancelled.php' || $page == 'booking-details-approved.php' ? 'show':'' ?>" 
    data-bs-parent="#sidebar-nav">

      <li>
        <a href="booking-pending.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="nav-link <?= $page == 'booking-pending.php' || $page == 'booking-details.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Pending</span>
        </a>
      </li>
      <li>
        <a  href="booking-approved.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="nav-link <?= $page == 'booking-approved.php' || $page == 'booking-details-approved.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Approved</span>
        </a>
      </li>
      <li>
        <a href="booking-rejected.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="nav-link <?= $page == 'booking-rejected.php' || $page == 'booking-details-reject.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Rejected</span>
        </a>
      </li>
      <li>
        <a href="booking-cancelled.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="nav-link <?= $page == 'booking-cancelled.php' || $page == 'booking-details-cancelled.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Cancelled</span>
        </a>
      </li>
    </ul>
  </li><!-- End Bookings Nav -->
  
    <br>
    <li class="nav-heading">Interfaces</li>
    <br>
    
  <li class="nav-item">

    <a class="nav-link collapsed <?= $page == 'post-view.php' || $page == 'post-edit.php' || $page == 'post-add.php' || $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'active':'' ?>" 
    data-bs-target="#CMSnav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-blockquote-left"></i><span>CMS</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="CMSnav" class="nav-content collapse <?= $page == 'post-view.php' || $page == 'post-edit.php' || $page == 'post-add.php' || $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'show':'' ?>" 
    data-bs-parent="#sidebar-nav">

      <li>
        <a href="post-view.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="nav-link <?= $page == 'post-view.php' || $page == 'post-edit.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Gallery Content</span>
        </a>
      </li>
      <li>
        <a href="category-view.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="nav-link <?= $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Gallery Category</span>
        </a>
      </li>
    </ul>
  </li><!-- End CMS Nav -->

  <?php if($_SESSION['auth_role'] == '0') : ?>
  <li class="nav-item">
    <a class="nav-link collapsed <?= $page == 'report.php' ? 'active':'' ?>" href="report.php?id=<?= $_SESSION['auth_user']['user_id'];?>">
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
        <a href="archive-user.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="nav-link <?= $page == 'archive-user.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Users</span>
        </a>
      </li>
      <li>
        <a href="post-archive.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="nav-link <?= $page == 'post-archive.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Gallery Content</span>
        </a>
      </li>
      <li>
        <a href="archive-category.php?id=<?= $_SESSION['auth_user']['user_id'];?>" class="nav-link <?= $page == 'archive-category.php' ? 'active':'' ?>">
          <i class="bi bi-circle"></i><span>Gallery Category</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

</ul>

</aside><!-- End Sidebar-->