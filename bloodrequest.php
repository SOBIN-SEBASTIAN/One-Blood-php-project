<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="Request Bloodport">

  <title>Blood Requests </title>
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
    $page='view_bb'; 
    include("header.php"); 
    include("sidebar.php");
    include("dbcon.php");
    if(isset($_POST["btnb"]))
    {
      $b_group=$_POST["group"];
      $bank_id=$_POST["bank"];
    }
    $sql="SELECT `l_id` FROM `login` WHERE `u_name`='$name'";//FETCHING LOGIN ID FROM LOGIN TABLE
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($res);
    $lid=$row["l_id"];
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blood Request</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">View Blood Bank</a></li>
          <li class="breadcrumb-item active">Blood Request</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <!-- ======= Sidebar ======= -->
    <section class="section dashboard" >
      <div class="row">
         <div class="col">
            <div class="card">
              <div class="card-body">
                <form method="post" action="">
                  
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Blood Group</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $b_group;?>" readonly name="bl_g">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="hidden" name="ban_id" class="form-control" value="<?php echo $bank_id; ?>">
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">No Of Units Requried</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="units">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Requried On</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date">
                  </div>
                </div>
                <div class="row mb-3">
                  <input type="submit" name="reqst" class="btn btn-primary">
                  </div>
                </div>
              </form>
              <?php
              if(isset($_POST["reqst"]))//INSERTING THE BLOOD REQUEST TO DATABASE
              {
                $bn_id=$_POST["ban_id"];
                $blood=$_POST["bl_g"];
                $unit=$_POST["units"];
                $date=$_POST["date"];
                $sql1="INSERT INTO `b_request`(`bid`,`uid`, `b_group`, `units`,`date`, `status`) VALUES ('$bn_id','$lid','$blood','$unit','$date','0')";
                $res2=mysqli_query($con,$sql1);
                ?>
                <script type="text/javascript">
                  window.location.href='userdashboard.php'
                </script>
                <?php
                  }
              ?>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

  </main><!-- End #main -->

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