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

    <body class="sb-nav-fixed">

    <?php
    //session_start();
    include('includes/navbar-top.php')
    ?>

    <div id="layoutSidenav">
        
        <?php include('includes/sidebar.php')?>

        <div id="layoutSidenav_content">
                <main>