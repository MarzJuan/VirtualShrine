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

        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">No. of Admins
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
                
                </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="assistant-admin-list.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Bookings
                <?php
                    $dash_bookings_query = "SELECT * FROM bookings";
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
                </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="booking-pending.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Gallery Content</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
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
}
.card-2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  background-color: #f1f1f1;
  border: none;
  margin-right: 10px;
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

<div class="card-1" style="width: 300px; height: 380px; float: right; margin-right:6px;margin-top: 0;">
<h4 style="text-align: left;  padding: 16px;margin-left:15px;">Admin Activity</h4>

<?php
                    $dash_users_query = "SELECT * FROM auditlog LIMIT 3";
                    $dash_users_query_run = mysqli_query($con, $dash_users_query);

                    if(mysqli_num_rows($dash_users_query_run) > 0)
                    {
                        while($user = mysqli_fetch_assoc($dash_users_query_run))
                        {
                        ?>
    <div class="card mb-3" style="max-width: 300px;max-height: 70px;margin-left:5px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../uploads/user/defaultProfile.jpeg" style="height: 40px;margin-top:5px;" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-user">
        <h6 style="align-text:left;"><b><?= $user['username']; ?></b></h6>
        <p class="card-text"><?= $user['action']; ?></p>
        <p class="card-text" style="margin-top: -10px;"><small class="text-muted"><?= $user['created_at']; ?></small></p>
      </div>
    </div>
    </div>
    <?php
            }
        }
        ?>
        <div class="d-flex align-items-center justify-content-between" style="margin-top:20px;margin-left:160px;">
            <a class="small text-black stretched-link" href="report.php">View More<i style="margin-left:15px;" class="fas fa-angle-right"></i></a>
            <div class="small text-black"></div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>


<!-- ADMIN ACTIVITY -->
    
<div class="card-2" style="width: 300px; height: 380px; float: right; margin-right:6px;margin-top: 0;">
<h4 style="text-align: left;  padding: 16px;margin-left:15px;">Users</h4>

<?php
                    $dash_users_query = "SELECT * FROM users LIMIT 3";
                    $dash_users_query_run = mysqli_query($con, $dash_users_query);

                    if(mysqli_num_rows($dash_users_query_run) > 0)
                    {
                        while($user = mysqli_fetch_assoc($dash_users_query_run))
                        {
                        ?>
    <div class="card mb-3" style="max-width: 300px;max-height: 70px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../uploads/user/defaultProfile.jpeg" style="height: 40px;margin-top:5px;" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-user">
        <h6 style="align-text:left;"><b><?= $user['fname']." ".$user['lname']; ?></b></h6>
        <p class="card-text">
        <?php
            if($user['role_as'] == 0){
                echo 'Head Admin';
            }
            elseif($user['role_as'] == 1){
                echo 'Assistant Admin';
            }
        ?>
        <p class="card-text" style="margin-top: -10px;"><small class="text-muted">
        <?php
            if($user['status'] == 0){
                echo 'Active';
            }
            elseif($user['status'] == 1){
                echo 'Inactive';
            }
        ?>
        </small></p>
      </div>
    </div>
    </div>
    <?php
            }
        }
        ?>
        <div class="d-flex align-items-center justify-content-between" style="margin-top:20px;margin-left:180px;">
            <a class="small text-black stretched-link" href="assistant-admin-list.php">View More<i style="margin-left:15px;" class="fas fa-angle-right"></i></a>
            <div class="small text-black"></div>
        </div>
    </div>
    </div>
    </div>
    </div>
    

    
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
        <input type="date" onchange="startDateFilter(this)" value="2022-10-01" min="2022-10-01" max="2022-10-30">
        <input type="date" onchange="endDateFilter(this)" value="2022-10-30" min="2022-10-01" max="2022-10-30">
        <canvas id="myChart"></canvas>
      </div>
    </div>

    <?php

      try {
        $sql = "SELECT * FROM virtualshrine.bookings WHERE status='1'";
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
            max: '2022-10-30',
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

    
               

<?php
include('includes/footer.php');
include('includes/script.php');
?>