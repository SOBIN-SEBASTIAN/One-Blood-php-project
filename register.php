<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages/ Register</title>
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
<?php
$page='Userreg';
include ("dbcon.php");
if(isset($_POST["btn1"]))
      {
        $name=$_POST["name"];
        $dob=$_POST["dob"];
        $add=$_POST["add"];
        $gender=$_POST["gender"];
        $bgroup=$_POST["group"];
        $mob=$_POST["mob"];
        $mail=$_POST["email"];
        $uname=$_POST["username"];
        $pass=md5($_POST["password"]);
        $type="user";
        $res=mysqli_query($con,"INSERT INTO `login`(`u_name`, `pswd`, `u_type`) VALUES ('$uname','$pass','$type')");
          $res1=mysqli_query($con,"SELECT * FROM `login` WHERE `u_name`='$uname'");
          while($row=mysqli_fetch_assoc($res1))
          {
            $s_id=$row["l_id"];
          }
        $res2=mysqli_query($con,"INSERT INTO `user`( `l_id`, `name`, `dob`, `b_group`,`gender`, `mail`, `mob`, `address`) VALUES ('$s_id','$name','$dob','$bgroup','$gender','$mail','$mob','$add')");
        if($res2)
        {
          header("location:login.php");
        }
      }
?>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">OneBlood</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation"  method="post" action="">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" onblur="validate()" >
                      <div class="invalid-feedback1"></div>
                    </div> 

                   <div class="col-6">
                      <label for="yourEmail" class="form-label">Your Date Of Birth</label>
                      <input type="date" name="dob" class="form-control" id="yourdob" >
                      <div class="invalid-feedback">Please enter a Date of Birth!</div>
                    </div>

                    <div class="col-6">
                      <label for="group" class="form-label">Your Blood Group</label>
                      <select name="group" class="form-select">
							<option value="A+">A+</option><option value="A-">A-</option>
							<option value="B+">B+</option><option value="B-">B-</option>
							<option value="O+">O+</option><option value="O-">O-</option>
							<option value="AB+">AB+</option><option value="AB-">AB-</option>
					  </select>
                      <div class="invalid-feedback">Please enter Blood Group!</div>
                    </div>

                    <div class="col-12">
                      <label for="gender" class="form-label">Gender</label>&nbsp
                      <input type="radio" name="gender" value="Female" class="form-check-input" id="gender" > &nbsp &nbsp  Female  &nbsp &nbsp&nbsp&nbsp                   
                      <input type="radio" name="gender" value="Male" class="form-check-input" id="gender" >&nbsp &nbsp Male

                      <div class="invalid-feedback">Please Select Your Gender!</div>
                    </div>

                    <div class="col-6">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail">
                      <div class="invalid-feedback">
                      		Please enter a valid Email adddress!
                  	  </div>
                    </div>

                    <div class="col-6">
                      <label for="yourEmail" class="form-label">Mobile Number</label>
                      <input type="text" name="mob" class="form-control" id="yournumber" >
                      <div class="invalid-feedback">Please enter a valid Mobile Number!</div>
                    </div>


                    <div class="col-12">
                      <label for="youraddress" class="form-label">Your Address</label>
                      <textarea name="add" class="form-control" id="youradd" ></textarea>
                      
                      <div class="invalid-feedback">Please, enter your Address!</div>
                    </div> 

                    <div class="col-6">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" >
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-6">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" >
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" >
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <input type="submit" name="btn1" class="btn btn-primary w-100" value="Create Account" onclick="validate()">
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>
              <script type="text/javascript">
                var name=document.getElementById("yourName");
                function validate()
                {
                  if(name==" ")
                  {
                    alert1("Please, enter your name!");
                    document.getElementById("invalid-feedback1").innerHTML ="Please, enter your name!";
                    return false;
                  }
                }
              </script>

              <div class="credits">
                Designed by <a href="">One Blood</a>
              </div>

            </div>
          </div>
        </div>

      </section>
    </div>
  </main><!-- End #main -->

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