<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VirtualShrine - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="image/crs-logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link href="../assets/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

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

    <!-- GOOGLE API -->
    <script src="https://apis.google.com/js/api.js"></script>

    <!-- EASY DATA GOOGLE ANALYTICS -->
    <script type="text/javascript" src="js/easyData-google-analytics.js"></script>

    <!-- EASYDATA - FETCH DATA -->
    <script>
        //Client ID
        const CLIENT_ID = "228187318090-n0ofjfct4b7gggg2btbo7fs3b2ph7tu3.apps.googleusercontent.com";

        function loadData() {
            //GA PROPERTY ID
            const propertyId = "343177169";

            const startDate = "7DaysAgo";
            const endDate = "today"
            const metrics = [
                { name: "activeUsers" },
                { name: "screenPageViews" },
                { name: "sessions" },
            ];

            const query = {
                dateRanges: [{startDate, endDate }],
                metrics: metrics,
            };
            
            runReport(propertyId, query, displayResult);
        }
    </script>

</head>

<body>

<?php
    //session_start();
    include('includes/navbar-top.php')
?>

<?php include('includes/sidebar.php')?>

  <!-- ======= Header ======= -->