<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User Dashboard </title>
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
    $page='profile';
    include("header.php"); 
    include("sidebar.php");
    include("dbcon.php");
    $sql="SELECT `l_id` FROM `login` WHERE `u_name`='$name'";//FETCHING LOGIN ID FROM LOGIN TABLE
    $res=mysqli_query($con,$sql);
    $row1=mysqli_fetch_array($res);
    $lid=$row1["l_id"];
    $sq="SELECT * FROM `user` WHERE `l_id`='$lid'";
    $res1=mysqli_query($con,$sq);
    $row=mysqli_fetch_array($res1);
    $i=mysqli_query($con,"SELECT * FROM `image` WHERE `l_id`='$lid'");
              $ty=mysqli_fetch_array($i);
              $z=$ty['img_name'];
  ?>
  <!-- ======= Sidebar ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>User Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="userdashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="profilephotos/<?php echo $z;?>" alt="Profile" class="rounded-circle" with=100px height=100px>
              <h2><?php echo  $row["name"];?></h2>
              <h3>User</h3>
              <?php
              $n=mysqli_num_rows($i);
              if($n==0){
                echo "<a href='#profile-settings'>Add Profile Image</a>";
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
                <?php 
                if($n==0){?>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Add Profile Photo</button>
                </li>
                <?php
                }
                ?>

              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label "> Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["name"];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date of Brith</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["dob"];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Blood Group</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["b_group"];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["gender"];?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["address"];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["mob"];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["mail"];?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" action="#" enctype="multipart/form-data">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="profilephotos/<?php echo $z;?>" alt="Profile">
                        <div class="pt-2">
                          <input type="file" name="editimage" class="btn btn-primary btn-sm">
                          <a href="deleteprofile.php?vid=<?php echo $lid ;?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" value="<?php echo  $row["name"];?>" >
                      <div class="invalid-feedback1"></div>
                    </div> 

                   <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Date Of Birth</label>
                      <input type="date" name="dob" class="form-control" id="yourdob" value="<?php echo  $row["dob"];?>" >
                      <div class="invalid-feedback">Please enter a Date of Birth!</div>
                    </div>

                    <div class="col-12">
                      <label for="group" class="form-label">Your Blood Group</label>
                      <select name="group" class="form-select">
                        <option value="A+"
                        <?php
                        if($row["b_group"]=="A+")
                        {
                          echo "Selected";
                        }
                        ?>>A+</option>
                        <option value="A-"<?php
                        if($row["b_group"]=="A-")
                        {
                          echo "Selected";
                        }
                        ?> >A-</option>
                        <option value="B+"<?php
                        if($row["b_group"]=="B+")
                        {
                          echo "Selected";
                        }
                        ?>>B+</option>
                        <option value="B-"<?php
                        if($row["b_group"]=="B-")
                        {
                          echo "Selected";
                        }
                        ?>>B-</option>
                        <option value="O+" <?php
                        if($row["b_group"]=="O+")
                        {
                          echo "Selected";
                        }
                        ?>>O+</option>
                        <option value="O-"
                        <?php
                        if($row["b_group"]=="O-")
                        {
                          echo "Selected";
                        }
                        ?>>O-</option>
                        <option value="AB+"<?php
                        if($row["b_group"]=="AB+")
                        {
                          echo "Selected";
                        }
                        ?>>AB+</option>
                        <option value="AB-"<?php
                        if($row["b_group"]=="AB-")
                        {
                          echo "Selected";
                        }
                        ?>>AB-</option>
                      </select>
                      <div class="invalid-feedback">Please enter Blood Group!</div>
                    </div>
                    <div class="col-12"><br>
                      <label for="gender" class="form-label">Gender</label>&nbsp
                      <input type="radio" name="gender" value="Female" class="form-check-input" id="gender" <?php if($row["gender"]=="Female"){
                        echo "checked";
                      } ?> > &nbsp &nbsp  Female  &nbsp &nbsp&nbsp&nbsp                   
                      <input type="radio" name="gender" value="Male" class="form-check-input" id="gender" <?php if($row["gender"]=="Male"){
                        echo "checked";
                      } ?> >&nbsp &nbsp Male
                      <br>
                      <div class="invalid-feedback">Please Select Your Gender!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" value="<?php echo  $row["mail"];?>">
                      <div class="invalid-feedback">
                          Please enter a valid Email adddress!
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Mobile Number</label>
                      <input type="text" name="mob" class="form-control" id="yournumber" value="<?php echo  $row["mob"];?>" >
                      <div class="invalid-feedback">Please enter a valid Mobile Number!</div>
                    </div>
                    <div class="col-12">
                      <label for="youraddress" class="form-label">Your Address</label>
                      <textarea name="add" class="form-control" id="youradd" ><?php echo  $row["address"];?></textarea>
                      <div class="invalid-feedback">Please, enter your Address!</div>
                    </div>
                    <br>
                    <div class="col-12">
                      <input type="submit" name="btn1" class="btn btn-primary w-100" value="Update">
                    </div> 
                  </form>
                  <?php
                    if(isset($_POST["btn1"]))
                    {
                        $g= explode("/",$_FILES["editimage"]["type"]);
                        $ni=$lid.".".$g[1];
                        if(isset($_FILES["editimage"]))
                        {
                          unlink("profilephotos/".$ty['img_name']);
                        }
                      $name=$_POST["name"];
                      $dob=$_POST["dob"];
                      $add=$_POST["add"];
                      $gender=$_POST["gender"];
                      $bgroup=$_POST["group"];
                      $mob=$_POST["mob"];
                      $mail=$_POST["email"];

                      $rt=mysqli_query($con,"UPDATE `user` SET `name`='$name',`dob`='$dob',`b_group`='$bgroup',`gender`='$gender',`mail`='$mail',`mob`='$mob',`address`='$add' WHERE `l_id`='$lid'");
                        move_uploaded_file($_FILES["editimage"]["tmp_name"],"profilephotos/".$ni);
                        $y=mysqli_query($con,"UPDATE `image` SET `img_name`='$ni' WHERE `l_id`=$lid");
                      if($rt & $y){
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
                  <form method="post" action="#" enctype="multipart/form-data">
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

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="post" action="">
                    <div class="">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="">
                        <input name="pass" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="">
                        <input name="new" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="">
                        <input name="renew" type="password" class="form-control" id="renewPassword" onblur="password()">
                      </div>
                      <div class="invalid-feedback1"></div>
                    </div>
                    <script type="text/javascript">
                      var x=documemt.getElementById("newPassword").value;
                      var y=documemt.getElementById("renewPassword").value;
                      function password(){
                        if(x != y)
                        {
                          document.getElementById("invalid-feedback1").innerHTML ="Password are not matching";
                          return false;
                        }
                      }
                    </script>
                    <div class="">
                      <input  type="submit" class="btn btn-primary" name="change" value="ADD">
                    </div>
                  </form>
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