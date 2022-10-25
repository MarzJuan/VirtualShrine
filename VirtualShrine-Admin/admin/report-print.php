<?php
include('authentication.php');
include('middleware/superadminAuth.php');
?>

<!DOCTYPE html>
<html lang="en">

    <title>Dashboard - VirtualShrine</title>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <head>
    <link rel="icon" type="image/png" href="../image/crs-logo.png">
    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <!--<link rel="icon" type="image/png" href=".../img/VirtualShrineLogo.png">-->

        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="css/dataTables.bootstrap5.min.css" rel="stylesheet" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->

    <style type="text/css" media="print">
        @media print{
            .noprint, .noprint *{
                display: none; !important;
            }
        }
    </style>

    </head>

    <body onload="print()" class="sb-nav-fixed">

    <?php
    //session_start();
    include('includes/navbar-top.php')
    ?>

    <div id="layoutSidenav">
        
        <?php include('includes/sidebar.php')?>

        <div id="layoutSidenav_content">
                <main>

<div class="container-fluid px-4">
<h1>&nbsp;</h1>

    <div class="row">
        <div class="col-md-12">

        <div class="card">
                <div class="card-header">
                    <center>
                    <h4>Admin Activity Report
                    <button type="" onclick="window.location.replace('report.php')" href="report-print.php" class="btn btn-secondary float-end mr-1 noprint"><span>Cancel Print</span></button>
                    </h4>
                    </center>
                </div>

                <table id="ready" class="table table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>Name</center></th>
                            <th><center>Action Made</center></th>
                            <th><center>Date Created</center></th>
                        </tr>
                    </thead>

                    <tbody>

                            <?php

                            $log = "SELECT * FROM auditlog";
                                    $log_run = mysqli_query($con, $log);

                                    //$posts = "SELECT * FROM posts WHERE status!='1' ";
                                   // $posts_run = mysqli_query($con, $posts);


                                    if(mysqli_num_rows($log_run) > 0)
                                    {
                                        foreach($log_run as $log)
                                        {
                                            ?>
                                            <tr>
                                                <td class="id"><?= $log['id']?></td>
                                                <td class="username"><?= $log['username']?></td>
                                                <td class="action_made"><?= $log['action']?></td>
                                                <td class="created_at"><?= $log['created_at']?></td>
                                            <?php
                                        }
                                    }
                                        
                                ?>
                                
                            </tbody>
                </table>
            </div>
        </div>
    </div>
</div>










<?php
include('includes/footer.php');
include('includes/script.php');
?>