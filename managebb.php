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
    include("adminside.php");
    include("dbcon.php");
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Blood Bnak</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindash.php">Admin Dashboard</a></li>
          <li class="breadcrumb-item active">Manage Blood Bank</li>
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
                    <th scope="col">Blood Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    <th scope="col">View</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $c=0;
                  $a="SELECT * FROM `b_bank` JOIN `login` ON `login`.`l_id`=`b_bank`.`l_id`";
                  $res=mysqli_query($con,$a);
                  while($row=mysqli_fetch_array($res))
                  {
                  $c++;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $c;?></th>
                    <td class="text-primary"><?php echo $row['b_name']; ?></td>
                    <td class="text-danger"><?php echo $row['b_phone']; ?></td>
                    <td class="text-danger"><?php echo $row['b_place'].",".$row['b_city'].",<br>".$row['b_district'].",".$row['b_pincode']; ?></td>
                    <td class="text-danger"><?php echo $row['u_name']; ?></td>
                    <td class="text-danger"><img src="profilephotos/<?php echo $row['b_img'];?>" alt="Profile" with=100px height=100px"></td>
                    <td><a href="bbupdate.php?fid=<?php echo $row['l_id'];?>cid=<?php echo $row['b_id'];?>" class="btn btn-success mb-2">Update </a></td>
                    <td><a href="admindeletebb.php?fid=<?php echo $row['l_id'];?>" class="btn btn-danger mb-2">Delete</a></td>
                    <td><a href="adminbloodstock.php?bid=<?php echo $row['b_id'];?>" class="btn btn-primary mb-2">View</a></td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          
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