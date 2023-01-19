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
    $page='manageblood'; 
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
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Blood</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Manage Blood</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <!-- ======= Sidebar ======= -->
    <section class="section dashboard" >
      <div class="row">
         <div class="col">
            <div class="card">
              <div class="card-body">
                <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">Slno</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $c=0;
                  $res1=mysqli_query($con,"SELECT * FROM `stock` WHERE `bid`='$bid'");
                  while($row1=mysqli_fetch_array($res1))
                  {
                  $c++;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $c;?></th>
                    <td class="text-primary"><?php echo $row1['b_group']; ?></td>
                    <td class="text-danger"><?php echo $row1['stock']; ?></td>
                    <td><a href="updatestock.php?fid=<?php echo $row1['sid'];?>" class="btn btn-success mb-2">Update </a></td>
                    <td><a href="deletestock.php?fid=<?php echo $row1['sid'];?>" class="btn btn-danger mb-2">Delete</a></td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="pagetitle">
          <h1>Add Blood Group</h1>
          </div>
          <div class="card">
              <div class="card-body">
              <br>
              <?php
              if(isset($_POST["add"]))
              {
                $bg=$_POST["bl_g"];
                $u=$_POST["unit"];
                mysqli_query($con,"INSERT INTO `stock`( `bid`, `b_group`, `stock`) VALUES ('$bid','$bg','$u')");
                ?>
                <script type="text/javascript">
                  window.location.href='manageblood.php'
                </script>
                <?php
              }
              ?>
              <form method="post" action="">
                  
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Blood Group</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bl_g">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Stock</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="unit">
                  </div>
                </div>
                <div class="row mb-3">
                  <input type="submit" name="add" class="btn btn-success" value="ADD">
                  </div>
                </div>
              </form>
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