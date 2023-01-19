<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile </title>
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
    $page='bprofile';
    include("header.php"); 
    include("bbanksidebar.php");
    include("dbcon.php");
    $sql="SELECT `l_id` FROM `login` WHERE `u_name`='$name'";//FETCHING LOGIN ID FROM LOGIN TABLE
    $res=mysqli_query($con,$sql);
    $row1=mysqli_fetch_array($res);
    $lid=$row1["l_id"];
    $sq="SELECT * FROM `b_bank` WHERE `l_id`='$lid'";
    $res1=mysqli_query($con,$sq);
    $row=mysqli_fetch_array($res1);
    $i=mysqli_query($con,"SELECT * FROM `b_bank` WHERE`l_id`='$lid'");
              $ty=mysqli_fetch_array($i);
              $z=$ty[`b_img`];
  ?>
  <!-- ======= Sidebar ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1> Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="bankdash.php">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
               <img src="profilephotos/<?php echo $row['b_img'];?>" alt="Profile" class="rounded-circle" with=100px height=100px">
              <h2><?php echo  $row["b_name"];?></h2>
              <h3>Blood Bank Admin</h3>
              <?php
              $n=mysqli_num_rows($i);
              if($n==0){
                echo "<a href=''>Add Profile Image</a>";
              }
              ?>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label "> Blood Bank Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['b_name']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["b_phone"];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['b_place'].",".$row['b_city'].",<br>".$row['b_district'].",".$row['b_pincode']; ?></div>
                  </div>
                  
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" action="" enctype="multipart/form-data">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label"> Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="profilephotos/<?php echo $row['b_img'];?>" alt="Image">
                        <div class="pt-2">
                          <input type="file" name="pimage" class="btn btn-primary btn-sm">
                          <a href="deleteprofile.php?vid=<?php echo $lid ;?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>
                  </form>

                  <form class="row g-3 "  method="post" action="">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Bank Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" value="<?php echo  $row["b_name"];?>" >
                      <div class="invalid-feedback1"></div>
                    </div> 

                   <div class="col-12">
                      <label for="bphone" class="form-label">Phone</label>
                      <input type="text" name="dob" class="form-control" id="bphone" value="<?php echo  $row["b_phone"];?>" >
                      <div class="invalid-feedback">Please enter a Date of Birth!</div>
                    </div>

                    <div class="col-12">
                      <label for="city" class="form-label">City</label>
                      <input type="email" name="email" class="form-control" id="city" value="<?php echo  $row["b_city"];?>">
                      <div class="invalid-feedback">
                          Please enter a valid Email adddress!
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">place</label>
                      <input type="text" name="mob" class="form-control" id="yournumber" value="<?php echo  $row["b_place"];?>" >
                      <div class="invalid-feedback">Please enter a valid Mobile Number!</div>
                    </div>
                    <div class="col-12">
                      <label for="dist" class="form-label">District</label>
                      <select class="form-select" name="dist" id="dist"> 
                            <option value="">Select ..</option>
                            <option value="Alappuzha" >Alappuzha</option>
                            <option value="Ernakulam" >Ernakulam</option>
                            <option value="Idukki" >Idukki</option>
                            <option value="Kannur" >Kannur</option>
                            <option value="kasargod" >Kasargod</option>
                            <option value="Kollam" >Kollam</option>
                            <option value="Kottayam" >Kottayam</option>
                            <option value="Kozhikode" >Kozhikode</option>
                            <option value="Malappuram" >Malappuram</option>
                            <option value="Palakkad" >Palakkad</option>
                            <option value="Pathanamthitta" >Pathanamthitta</option>
                            <option value="Thiruvananthapuram" >Thiruvananthapuram</option>
                            <option value="Thrissur" >Thrissur</option>
                            <option value="Wayanad" >Wayanad</option>
                      </select>
                      <div class="badge border-warning border-1 text-warning">Please, Select your District</div>
                    </div> 
                    <div class="col-6">
                      <label for="city" class="form-label">Pin Code</label>
                      <input type="text" name="pin" class="form-control" id="pin" value="<?php echo  $row["b_pincode"];?>">
                      <div class="badge border-warning border-1 text-warning">Please enter Pincode</div>
                    </div>
                    <div class="col-12">
                      <input type="submit" name="btn1" class="btn btn-primary w-100" value="Update">
                    </div> 
                  </form>
                  <?php
                    if(isset($_POST["btn1"]))
                    {
                      $g= explode("/",$_FILES["pimage"]["type"]);
                        $ni=$lid.".".$g[1];
                        if(isset($_FILES["pimage"]))
                        {
                          unlink("profilephotos/".$row['b_img']);
                        }
                      $bname=$_POST["bname"];
                      $phone=$_POST["bphone"];
                      $place=$_POST["bplace"];
                      $city=$_POST["city"];
                      $dist=$_POST["dist"];
                      $pin=$_POST["pin"];
                      $rt=mysqli_query($con,"UPDATE `b_bank`SET `b_name`='$bname',`b_phone`='$phone',`b_place`='$place',`b_city`='$city',`b_district`='$dist',`b_pincode`='$pin',`b_img`='$ni' WHERE `l_id`=`='$lid'");
                      if($rt){
                      ?>
                      <script type="text/javascript">
                        window.location.href='userprofile.php'
                      </script>
                      <?php
                      }
                    }
                  ?>
                </div>
                <div class="tab-pane fade pt-3" id="profile-settings" >
                  <!-- Settings Form -->
                  <form method="post" action="" enctype="multipart/form-data">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="profilephotos/<?php echo $z; ?>" with=100px height=100px alt="Profile">
                        <div class="pt-2">
                          <input type="file" name="pimage" class="btn btn-primary btn-sm">
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                        <div class="pt-2">
                          <input type="submit" class="btn btn-success" name="img" value="Add">
                      </div>
                    </div>
                  </form>
                </div>
                <?php
                if(isset($_POST['img']))
                {
                  $f= explode("/",$_FILES["pimage"]["type"]);
                  $na=$lid.".".$f[1];
                  move_uploaded_file($_FILES["pimage"]["tmp_name"],"profilephotos/".$na);
                  $v=mysqli_query($con,"INSERT INTO `image`(`l_id`,`img_name`) VALUES ('$lid','$na')");
                  if($v)
                  {
                  ?>
                    <script type="text/javascript">
                        window.location.href='userprofile.php'
                    </script>
                  <?php
                  }
                }
                ?>
                </div>
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