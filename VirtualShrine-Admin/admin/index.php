<?php
include('authentication.php');
include('includes/header.php');
?>


<?php include('message.php'); ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-6">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    
        <div class="row">

        <?php if($_SESSION['auth_role'] == '0') : ?> <!--ONLY SUPER ADMIN CAN VIEW-->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">No. of Admins</div>
                <?php
                    $dash_users_query = "SELECT * FROM users";
                    $dash_users_query_run = mysqli_query($con, $dash_users_query);

                    if($user_total = mysqli_num_rows($dash_users_query_run))
                    {
                        echo '<h4 class=""mb-0>'.$user_total.'</h4>';
                    }
                    else
                    {
                        echo '<h4 class=""mb-0>No Data</h4>';
                    }

                ?>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="assistant-admin-list.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Pending Bookings</div>
                <?php
                    $dash_bookings_query = "SELECT * FROM bookings WHERE status='0'";
                    $dash_bookings_query_run = mysqli_query($con, $dash_bookings_query);

                    if($bookings_total = mysqli_num_rows($dash_bookings_query_run))
                    {
                        echo '<h4 class=""mb-0>'.$bookings_total.'</h4>';
                    }
                    else
                    {
                        echo '<h4 class=""mb-0>No Data</h4>';
                    }

                ?>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="booking-pending.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">Total Rescheduled Bookings</div>
                <?php
                    $dash_bookings_query = "SELECT * FROM bookings WHERE status='3'";
                    $dash_bookings_query_run = mysqli_query($con, $dash_bookings_query);

                    if($bookings_total = mysqli_num_rows($dash_bookings_query_run))
                    {
                        echo '<h4 class=""mb-0>'.$bookings_total.'</h4>';
                    }
                    else
                    {
                        echo '<h4 class=""mb-0>No Data</h4>';
                    }

                ?>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="booking-pending.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Gallery Content</div>
                <?php
                    $dash_content_query = "SELECT * FROM posts WHERE status='0'";
                    $dash_content_query_run = mysqli_query($con, $dash_content_query);

                    if($content_total = mysqli_num_rows($dash_content_query_run))
                    {
                        echo '<h4 class=""mb-0>'.$content_total.'</h4>';
                    }
                    else
                    {
                        echo '<h4 class=""mb-0>No Data</h4>';
                    }

                ?>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="post-view.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        <!--  -->
    </div>
    </div>


<style>
{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); this adds the "card" effect */
  text-align: center;
  background-color: #f1f1f1;
  border: none;
}
.card-1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  background-color: #f1f1f1;
  border: none;
  margin-left: 10px;
  width: 300px; 
  height: 380px; 
  float: right; 
  margin-right:6px;
  margin-top: 0;
}
.card-2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  background-color: #f1f1f1;
  border: none;
  margin-right: 10px;
  width: 300px; 
  height: 380px; 
  float: right; 
  margin-right:6px;
  margin-top: 0;
}

.card-user {
  padding: 1px;
  text-align: left;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
    </style>
    
<!-- VISITOR ANALYTICS -->

    <?php
    $username = "root";
    $password = "";
    $database = "virtualshrine";

    try{
        $pdo = new PDO("mysql:host=localhost;database=$database", $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("ERROR: Could not connect. ".$e->getMessage());
    }
    ?>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(255, 26, 104, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartBox {
        margin-left: 20px;
        margin-bottom: 100px;
        height: 380px;
        width: 615px;
        padding: 20px;
        border-radius: 10px;
        border: solid 1px rgba(255, 26, 104, 1);
        background: white;
      }
    </style>
    
      <div class="chartBox">
        <h4>Visitor Analytics</h4>
        <canvas id="myChart"></canvas>
      
        <input type="date" onchange="startDateFilter(this)" value="2022-10-01" min="2022-10-01" max="2022-10-30">
        <input type="date" onchange="endDateFilter(this)" value="2022-10-30" min="2022-10-01" max="2022-10-30">
        </div>
      </div>

    <?php

      try {
        $sql = "SELECT * FROM virtualshrine.bookings";
        $result = $pdo->query($sql);

        if($result->rowCount() > 0) {
            while($row = $result->fetch()) {
                $dateArray[] = $row["date_visit"];
                $visitArray[] = $row["no_visitors"];
            }

            unset($result);
        }
        else
        {
            echo 'No results in Database';
        }
      }
      catch(PDOException $e) 
      {
        die("Error");
      }
      unset($pdo);
    ?>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https:cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    
    <script>
        const dateArrayJS = <?php echo json_encode($dateArray);?>;
        //console.log(dateArrayJS)

        const dateChartJS = dateArrayJS.map((day, index) => {
            let dayjs = new Date(day);
            return dayjs.setHours(0, 0, 0, 0);
        })

    // setup 
    const data = {
      labels: dateChartJS,
      datasets: [{
        label: 'Visitors',
        data: <?php echo json_encode($visitArray);?>,
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        // autoSkip: false,
        scales: {
          x: {
            min: '2022-10-01',
            max: '2022-10-31',
            type: 'time',
            time: {
                unit: 'day'
            }
          },
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    function startDateFilter(date){
        const startDate = new Date(date.value);
        console.log(startDate.setHours(0, 0, 0, 0));
        myChart.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0);
        myChart.update();
    }

    function endDateFilter(date){
        const endDate = new Date(date.value);
        console.log(endDate.setHours(0, 0, 0, 0));
        myChart.config.options.scales.x.max = endDate.setHours(0, 0, 0, 0);
        myChart.update();
    }
    </script>
</div>
<!-- VISITOR ANALYTICS -->
    
               

<?php
include('includes/footer.php');
include('includes/script.php');
?>