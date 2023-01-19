<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="Request Bloodport">

  <title>Manage Blood</title>
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
    $page='updatestock'; 
    include("header.php"); 
    include("bbanksidebar.php");
    include("dbcon.php");
    $a="SELECT * FROM `login` WHERE `u_name`='$name'";
    $res=mysqli_query($con,$a);
    $row=mysqli_fetch_array($res);
      $lid=$row["l_id"];
      $b="SELECT `b_id` FROM `b_bank` WHERE `l_id`='$lid'";
      $resl=mysqli_query($con,$b);
      $row1=mysqli_fetch_array($resl);
      $bid=$row1["b_id"];
      $id=$_GET["fid"];
      $r=mysqli_query($con,"SELECT * FROM `stock` WHERE `sid`='$id'");
      $rs=mysqli_fetch_array($r);
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Blood Group</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Manage Blood</a></li>
          <li class="breadcrumb-item active">Update Blood Group</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <!-- ======= Sidebar ======= -->
    <section class="section dashboard" >
      <div class="row">
         <div class="col">
            
          <div class="card">
              <div class="card-body">
              <br>
              
              <form method="post" action="">
                  
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Blood Group</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $rs["b_group"];?>"readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Stock</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stock" value="<?php echo $rs["stock"];?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <input type="submit" name="add" class="btn btn-success" value="Update">
                  </div>
                </div>
              </form>
              <?php
              if(isset($_POST["add"]))
              {
                $u=$_POST["stock"];
                mysqli_query($con,"UPDATE `stock` SET `stock`='$u' WHERE `sid`='$id'");
                ?>
                <script type="text/javascript">
                  window.location.href='manageblood.php'
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