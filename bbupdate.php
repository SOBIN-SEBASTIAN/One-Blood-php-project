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
    $l=$_GET["fid"];
    $b=$_GET["cid"];
    $sql="SELECT `l_id` FROM `login` WHERE `l_id`='$l'";//FETCHING LOGIN ID FROM LOGIN TABLE
    $res=mysqli_query($con,$sql);
    $row1=mysqli_fetch_array($res);
    $lid=$row1["l_id"];
    $sq="SELECT * FROM `b_bank` WHERE `l_id`='$lid'";
    $res1=mysqli_query($con,$sq);
    $row=mysqli_fetch_array($res1);
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Blood Bank</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="managebb.php">Manage Blood Bank</a></li>
          <li class="breadcrumb-item active">Update Blood Bank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <!-- ======= Sidebar ======= -->
    <section class="section dashboard" >
      <div class="row">
         <div class="col">
            <div class="card">
              <div class="card-body">
              <form method="post" action="" enctype="multipart/form-data">
                <br>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label"> Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="profilephotos/<?php echo $row['b_img'];?>" alt="Image" width=100 height=100>
                        <div class="pt-2">
                          <input type="file" name="pimage" class="btn btn-primary btn-sm">
                          <a href="deleteprofile.php?vid=<?php echo $lid ;?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Bank Name</label>
                      <input type="text" name="bname" class="form-control" id="yourName" value="<?php echo  $row["b_name"];?>" >
                      <div class="invalid-feedback1"></div>
                    </div> 

                   <div class="col-12">
                      <label for="bphone" class="form-label">Phone</label>
                      <input type="text" name="bphone" class="form-control" id="bphone" value="<?php echo  $row["b_phone"];?>" >
                      <div class="invalid-feedback">Please enter a Date of Birth!</div>
                    </div>

                    <div class="col-12">
                      <label for="city" class="form-label">City</label>
                      <input type="text" name="city" class="form-control" id="city" value="<?php echo  $row["b_city"];?>">
                      <div class="invalid-feedback">
                          Please enter a valid Email adddress!
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">place</label>
                      <input type="text" name="bplace" class="form-control" id="yournumber" value="<?php echo  $row["b_place"];?>" >
                      <div class="invalid-feedback">Please enter a valid Mobile Number!</div>
                    </div>
                    <div class="col-12">
                      <label for="dist" class="form-label">District</label>
                      <select class="form-select" name="dist" id="dist"> 
                            <option value="">Select ..</option>
                            <option value="Alappuzha" <?php 
                            if($row["b_district"]=="Alappuzha")
                            {
                              echo ('selected');
                            }?>>Alappuzha</option>
                            <option value="Ernakulam"<?php 
                            if($row["b_district"]=="Ernakulam")
                            {
                              echo ('selected');
                            }?>>Ernakulam</option>
                            <option value="Idukki" <?php 
                            if($row["b_district"]=="Idukki")
                            {
                              echo ('selected');
                            }?>>Idukki</option>
                            <option value="Kannur" <?php 
                            if($row["b_district"]=="Kannur")
                            {
                              echo ('selected');
                            }?>>Kannur</option>
                            <option value="kasargod" <?php 
                            if($row["b_district"]=="kasargod")
                            {
                              echo ('selected');
                            }?>>Kasargod</option>
                            <option value="Kollam"<?php 
                            if($row["b_district"]=="Kollam")
                            {
                              echo ('selected');
                            }?> >Kollam</option>
                            <option value="Kottayam" <?php 
                            if($row["b_district"]=="Kottayam")
                            {
                              echo ('selected');
                            }?>>Kottayam</option>
                            <option value="Kozhikode"<?php 
                            if($row["b_district"]=="Kozhikode")
                            {
                              echo ('selected');
                            }?> >Kozhikode</option>
                            <option value="Malappuram"<?php 
                            if($row["b_district"]=="Malappuram")
                            {
                              echo ('selected');
                            }?> >Malappuram</option>
                            <option value="Palakkad" <?php 
                            if($row["b_district"]=="Palakkad")
                            {
                              echo ('selected');
                            }?>>Palakkad</option>
                            <option value="Pathanamthitta" <?php 
                            if($row["b_district"]=="Pathanamthitta")
                            {
                              echo ('selected');
                            }?>>Pathanamthitta</option>
                            <option value="Thiruvananthapuram" <?php 
                            if($row["b_district"]=="Thiruvananthapuram")
                            {
                              echo ('selected');
                            }?> >Thiruvananthapuram</option>
                            <option value="Thrissur" <?php 
                            if($row["b_district"]=="Thrissur")
                            {
                              echo ('selected');
                            }?>>Thrissur</option>
                            <option value="Wayanad" <?php 
                            if($row["b_district"]=="Wayanad")
                            {
                              echo ('selected');
                            }?> >Wayanad</option>
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
                        if(isset($_FILES["pimage"]))
                        {
                          $g= explode("/",$_FILES["pimage"]["type"]);
                          $ni=$lid.".".$g[1];
                          unlink("profilephotos/".$row['b_img']);
                          move_uploaded_file($_FILES["pimage"]["tmp_name"],"profilephotos/".$ni);
                        }
                        else
                        {
                          $ni=$row['b_img'];
                        }
                        $bname=$_POST["bname"];
                        $phone=$_POST["bphone"];
                        $place=$_POST["bplace"];
                        $city=$_POST["city"];
                        $dist=$_POST["dist"];
                        $pin=$_POST["pin"];
                        $rt=mysqli_query($con,"UPDATE `b_bank`SET `b_name`='$bname',`b_phone`='$phone',`b_place`='$place',`b_city`='$city',`b_district`='$dist',`b_pincode`='$pin',`b_img`='$ni' WHERE `l_id`='$lid'");
                      if($rt){
                      ?>
                      <script type="text/javascript">
                        window.location.href='managebb.php'
                      </script>
                      <?php
                      }
                    }
                  ?>
                </div>
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