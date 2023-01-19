<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="Request Bloodport">

  <title>Manage User</title>
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
    $page='manageuser'; 
    include("header.php"); 
    include("adminside.php");
    include("dbcon.php");
    $sq="SELECT * FROM `user`";
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindash.php">Admin Dashboard</a></li>
          <li class="breadcrumb-item active">Manage User</li>
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
                    <th scope="col">Name</th>
                    <th scope="col">Date of Brith</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Mail Id</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Address</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $c=0;
                  $res=mysqli_query($con,$sq);
                  while($row=mysqli_fetch_array($res))
                  {
                  $c++;
                  $l=$row["l_id"];
                  $res1=mysqli_query($con,"SELECT * FROM `image` WHERE `l_id`=$l");
                  $row1=mysqli_fetch_array($res1);
                  $res2=mysqli_query($con,"SELECT * FROM `login` WHERE `l_id`=$l");
                  $row2=mysqli_fetch_array($res2);
                  ?>
                  <tr>
                    <th scope="row"><?php echo $c;?></th>
                    <td class="text-primary"><?php echo $row['name']; ?></td>
                    <td class="text-danger"><?php echo $row['dob']; ?></td>
                    <td class="text-danger"><?php echo $row['b_group']; ?></td>
                    <td class="text-danger"><?php echo $row2['u_name']; ?></td>
                    <td class="text-danger"><?php echo $row['gender']; ?></td>
                    <td class="text-danger"><?php echo $row['mail']; ?></td>
                    <td class="text-danger"><?php echo $row['mob']; ?></td>
                    <td class="text-danger"><?php echo $row['address']; ?></td>
                    
                    <td class="text-danger"><img src="profilephotos/<?php echo $row1['img_name'];?>" alt="Profile" with=50px height=50px"></td>
                    <td><a href="deleteuser.php?fid=<?php echo $row['l_id'];?>" class="btn btn-danger mb-2">Delete</a></td>
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