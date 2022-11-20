<?php
include('authentication.php');
include('includes/header.php');
?>

  <main id="main" class="main">
  <?php include('message.php'); ?>
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- BOOKINGS CARD -->
        <a href="booking-approved.php">
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Total Booking</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-journal-bookmark-fill"></i>
                </div>
                <div class="ps-3">
                  <?php
                    $dash_bookings_query = "SELECT * FROM bookings";
                    $dash_bookings_query_run = mysqli_query($con, $dash_bookings_query);

                    if($bookings_total = mysqli_num_rows($dash_bookings_query_run))
                    {
                    echo '<h6>'.$bookings_total.'</h6>';
                    }
                    else
                    {
                      echo '<h6>'."0".'</h6>';
                    }
                  ?>
                </div>
                
              </div>
              <!-- <hr style="margin-bottom: 1px;"> -->
            </div>
            <!-- <a href="booking-approved.php"><span style="margin-left:5rem;">view more</span></a> -->
          </div>
          </a>
        </div><!-- End BOOKINGS CARD -->
        

        <!-- WEBSITE VISITS CARD -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Website Visitors</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-binoculars"></i>
                </div>
                <div class="ps-3" class="count" id="result-visits">
                  <h6>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- WEBSITE VISITS CARD -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title">Visitors</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3" class="count" id="active-visitor">
                  <h6>
                  </h6>

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

        <!-- ------------------------------------------------------------------------------------------- -->

        <div class="container page-content">
  <div class="row">
    <div class="col-md-8">
      <table class="table table-bordered" id="result-pages">
        <thead>
          <tr>
            <th width="40%">Top Active Pages</th>
            <th>Users</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    <div class="col-md-4">
      <table class="table table-bordered">
              <tbody>
                <tr>
                    <th>Right Now</th>
              </tr>
                <tr>
                    <td>
                      <h1>
                                <div class="count" id="active-users">
                                </div>
                      </h1>
                      <p>Active Users on Site</p>
                      <br>
                      <div id="devices">
                     </div>
                </td>
              </tr>
            </tbody>
          </table>
          
          <table class="table table-bordered" id="result-sources">
            <thead>
              <tr>
                <th>Source</th>
                <th>Users</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          
          <table class="table table-bordered" id="countries-sources">
            <thead>
              <tr>
                <th>Country</th>
                <th>Users</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          <table class="table table-bordered" id="browser-sources">
            <thead>
              <tr>
                <th>Browser</th>
                <th>Users</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          <table class="table table-bordered" id="os-sources">
            <thead>
              <tr>
                <th>OS</th>
                <th>Users</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          
    </div>
  </div>
</div>
<script type="text/javascript">
  setInterval(function(){
    call();
  },5000);
  function call(){
    get('pages');
    get('users');
    get('devices');
    get('sources');
    get('countries');
    get('browser');
    get('os');
  }
  call();
  function get(action){
    var view = '<?php echo VIEW;?>';
    $.ajax({
      url:"ajax.php?action="+action+'&view='+view,
      type:'get',
      success:function(res){
        if(action=='pages'){
          $("#result-pages tbody").html(res);
        }
        else if(action=='users'){
          $("#active-users").html(res);
        }
        else if(action=='devices'){
          $("#devices").html(res);
        }
        else if(action=='sources'){
          $("#result-sources tbody").html(res);
        }
        else if(action=='countries'){
          $("#countries-sources tbody").html(res);
        }
        else if(action=='browser'){
          $("#browser-sources tbody").html(res);
        }
        else if(action=='os'){
          $("#os-sources tbody").html(res);
        }
      }
    });
  }
  $(document).on('click','.open-link',function(){
    link = $(this).attr('data-link');
    link = '<?php echo DOMAIN;?>'+link;
    window.open(link, '_blank');
  });
</script>

        <!-- ------------------------------------------------------------------------------------------- -->
        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Website Visit <span>/Today</span></h5>

              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Sales',
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }, {
                      name: 'Revenue',
                      data: [11, 32, 45, 32, 34, 52, 41]
                    }, {
                      name: 'Customers',
                      data: [15, 11, 32, 18, 9, 24, 11]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'datetime',
                      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Recent Bookings <a href="booking-pending.php"><span>| See More</span></a></h5>

              <table class="table table-borderless datatable">

     
                <thead>
                  <tr>
                    <th scope="col">Booking ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date of Visit</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>

                <?php
          $bookings = "SELECT * FROM bookings WHERE status!='2' AND status!='4'";
          $bookings_run = mysqli_query($con, $bookings);
          $check = mysqli_num_rows($bookings_run) > 0;

        if($check)
            {
                while($act = mysqli_fetch_assoc($bookings_run))
                {
                ?>

                  <tr>
                    <th scope="row"><a href="#"><?= $act['booking_id'] ?></a></th>
                    <td><?= $act['fname'].' '.$act['lname'] ?></td>
                    <td><?= $act['date_visit'] ?></td>
                    <td>
                    <?php

                    if($act['status'] ==0)
                    {
                        echo '<span class="badge bg-warning">Pending</span>';
                    }
                    if($act['status'] ==1)
                    {
                        echo '<span class="badge bg-success">Approved</span>';
                    }
                    if($act['status'] ==3)
                    {
                        echo '<span class="badge bg-info">Reschedule</span>';
                    }
                    ?>
                    </td>
                  </tr>
                  <?php
                }
              }
              ?>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->


        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Top Selling <span>| Today</span></h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Preview</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sold</th>
                    <th scope="col">Revenue</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                    <td>$64</td>
                    <td class="fw-bold">124</td>
                    <td>$5,828</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                    <td>$46</td>
                    <td class="fw-bold">98</td>
                    <td>$4,508</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                    <td>$59</td>
                    <td class="fw-bold">74</td>
                    <td>$4,366</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                    <td>$32</td>
                    <td class="fw-bold">63</td>
                    <td>$2,016</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                    <td>$79</td>
                    <td class="fw-bold">41</td>
                    <td>$3,239</td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Top Selling -->

      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <?php if($_SESSION['auth_role'] == '0') : ?>
      <div class="card">

        <div class="card-body">
          <h5 class="card-title">User Activity <a href="Report.php"><span> | See More<span></a></h5>

          <div class="activity">
        <?php
        $activity_query = "SELECT * FROM auditlog WHERE created_at > DATE_SUB( NOW(), INTERVAL 24 HOUR) LIMIT 10";
        $activity_run = mysqli_query($con, $activity_query);
        $check = mysqli_num_rows($activity_run) > 0;

        if($check)
            {
                while($act = mysqli_fetch_assoc($activity_run))
                {
                ?>

            <div class="activity-item d-flex">
              <div class="activite-label"><?= $act['time']?></div>
              <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
              <div class="activity-content">
              <span class="fw-bold text-dark"><?= $act['username']?></span> <?= $act['action']?>
              </div>
            </div><!-- End activity item-->

            <?php
                }
            }
            ?>
            <!-- End activity item-->

          </div>

        </div>
      </div>
      <?php endif; ?>
      <!-- End Recent Activity -->


      <!-- Budget Report -->
      <!-- <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Budget Report <span>| This Month</span></h5>

          <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                legend: {
                  data: ['Allocated Budget', 'Actual Spending']
                },
                radar: {
                  // shape: 'circle',
                  indicator: [{
                      name: 'Sales',
                      max: 6500
                    },
                    {
                      name: 'Administration',
                      max: 16000
                    },
                    {
                      name: 'Information Technology',
                      max: 30000
                    },
                    {
                      name: 'Customer Support',
                      max: 38000
                    },
                    {
                      name: 'Development',
                      max: 52000
                    },
                    {
                      name: 'Marketing',
                      max: 25000
                    }
                  ]
                },
                series: [{
                  name: 'Budget vs spending',
                  type: 'radar',
                  data: [{
                      value: [4200, 3000, 20000, 35000, 50000, 18000],
                      name: 'Allocated Budget'
                    },
                    {
                      value: [5000, 14000, 28000, 26000, 42000, 21000],
                      name: 'Actual Spending'
                    }
                  ]
                }]
              });
            });
          </script>

        </div>
      </div>-->
      <!-- End Budget Report -->

      <!-- Website Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Website Traffic <span>| Today</span></h5>

          <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  top: '5%',
                  left: 'center'
                },
                series: [{
                  name: 'Access From',
                  type: 'pie',
                  radius: ['40%', '70%'],
                  avoidLabelOverlap: false,
                  label: {
                    show: false,
                    position: 'center'
                  },
                  emphasis: {
                    label: {
                      show: true,
                      fontSize: '18',
                      fontWeight: 'bold'
                    }
                  },
                  labelLine: {
                    show: false
                  },
                  data: [{
                      value: 1048,
                      name: 'Search Engine'
                    },
                    {
                      value: 735,
                      name: 'Direct'
                    },
                    {
                      value: 580,
                      name: 'Email'
                    },
                    {
                      value: 484,
                      name: 'Union Ads'
                    },
                    {
                      value: 300,
                      name: 'Video Ads'
                    }
                  ]
                }]
              });
            });
          </script>

        </div>
      </div><!-- End Website Traffic -->

      <!-- News & Updates Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

          <div class="news">
            <div class="post-item clearfix">
              <img src="assets/img/news-1.jpg" alt="">
              <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
              <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/news-2.jpg" alt="">
              <h4><a href="#">Quidem autem et impedit</a></h4>
              <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/news-3.jpg" alt="">
              <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
              <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/news-4.jpg" alt="">
              <h4><a href="#">Laborum corporis quo dara net para</a></h4>
              <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/news-5.jpg" alt="">
              <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
              <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
            </div>

          </div><!-- End sidebar recent posts-->

        </div>
      </div><!-- End News & Updates -->

    </div><!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- SCRIPT FOR GOOGLE ANALYTICS -->

<script type="text/javascript">
  setInterval(function(){
    call();
  },5000);
  function call(){
    get('visits');
    get('visitor');
    get('devices');
    get('sources');
    get('countries');
    get('browser');
    get('os');
  }
  call();
  function get(action){
    var view = '<?php echo VIEW;?>';
    $.ajax({
      url:"ajax.php?action="+action+'&view='+view,
      type:'get',
      success:function(res){
        if(action=='pages'){
          $("#result-visits").html(res);
        }
        else if(action=='visitors'){
          $("#active-visitor").html(res);
        }
        else if(action=='devices'){
          $("#devices").html(res);
        }
        else if(action=='sources'){
          $("#result-sources tbody").html(res);
        }
        else if(action=='countries'){
          $("#countries-sources tbody").html(res);
        }
        else if(action=='browser'){
          $("#browser-sources tbody").html(res);
        }
        else if(action=='os'){
          $("#os-sources tbody").html(res);
        }
      }
    });
  }
  $(document).on('click','.open-link',function(){
    link = $(this).attr('data-link');
    link = '<?php echo DOMAIN;?>'+link;
    window.open(link, '_blank');
  });
</script>

<?php
include('includes/footer.php');
include('includes/script.php');
?>