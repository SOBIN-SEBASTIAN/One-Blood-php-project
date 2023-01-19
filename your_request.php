<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blood Banks stock </title>
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
    $page='requst'; 
    include("header.php"); 
    include("sidebar.php");
    include("dbcon.php");
    $sql="SELECT `l_id` FROM `login` WHERE `u_name`='$name'";//FETCHING LOGIN ID FROM LOGIN TABLE
    $res=mysqli_query($con,$sql);
    $row1=mysqli_fetch_array($res);
    $lid=$row1["l_id"];
    $sql="SELECT * FROM `b_request` WHERE `uid`='$lid'";
    $res1=mysqli_query($con,$sql);

  ?>
  <!-- ======= Sidebar ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Your Requests</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Your Requests</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard" >
      <div class="row">
         <div class="col">
            <div class="card">
              <div class="card-body">
                <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">Slno</th>
                    <th scope="col">Blood Bank Name</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">No Units</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $c=1;
                  while($row=mysqli_fetch_array($res1))
                  {
                    $rqst=$row['rid'];
                    $ban_id=$row['bid'];
                    $q="SELECT `b_name` FROM `b_bank` WHERE `b_id`=$ban_id";
                    $res3=mysqli_query($con,$q);
                    $row2=mysqli_fetch_array($res3);
                    $bname=$row2['b_name'];
                  ?>
                  <tr>
                    <th scope="row"><?php echo $c ;?></th>
                    <td><?php echo $bname; ?></td>
                    <td><?php echo $row['b_group']; ?></td>
                    <td><?php echo $row['units']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php if($row['status']==0){
                      echo "Pending";
                    } 
                    else{
                      echo "Approved";
                    }?></td>
                    <td><a href="req_edit.php?did=<?php echo $rqst ?>" class="btn btn-primary mb-2">Edit</a></td>
                    <td><a href="req_delete.php?did=<?php echo $rqst ?>" class="btn btn-danger mb-2">Delete</a></td>
                  </tr>
                  <?php
                  $c++;
                  }
                  ?>
                </tbody>
              </table>
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