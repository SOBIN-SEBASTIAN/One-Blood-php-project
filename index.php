<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>One Blood</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php 
    $page='Home';
    include("inheader.php"); 
    include("inside.php");
    ?>
  <!-- ======= Sidebar ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">One Blood </a></li>
          <li class="breadcrumb-item active">Home</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <img src="home.png" width="800">
    <table class="table table-responsive table-bordered ">
            <tbody>
              <tr>
                <th colspan="3" style="color:white;background-color:red;">Compatible Blood Type Donors</th>
              </tr>
              <tr>
                <td><b>Blood Type</b></td>
                <td><b>Donate Blood To</b></td>
                <td><b>Receive Blood From</b></td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>A+</b></span></td>
                <td>A+ AB+</td>
                <td>A+ A- O+ O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>O+</b></span></td>
                <td>O+ A+ B+ AB+</td>
                <td>O+ O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>B+</b></span></td>
                <td>B+ AB+</td>
                <td>B+ B- O+ O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>AB+</b></span></td>
                <td>AB+</td>
                <td>Everyone</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>A-</b></span></td>
                <td>A+ A- AB+ AB-</td>
                <td>A- O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>O-</b></span></td>
                <td>Everyone</td>
                <td>O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>B-</b></span></td>
                <td>B+ B- AB+ AB-</td>
                <td>B- O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>AB-</b></span></td>
                <td>AB+ AB-</td>
                <td>AB- A- B- O-</td>
              </tr>
            </tbody>
          </table>
  </main>
  
</body>

 <?php
 include ("footer.php");
 ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>